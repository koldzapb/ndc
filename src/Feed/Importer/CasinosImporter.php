<?php

namespace App\Feed\Importer;

use App\ElasticSearch\ElasticSearch;
use App\Entity\Casino;
use App\Entity\Screenshot;
use App\Feed\Downloader;
use App\Mailer\Mailer;
use App\Repository\CasinoRepository;
use App\Repository\ScreenshotRepository;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

class CasinosImporter extends FeedsParent implements Importer
{
    const FEED = 'site_casinos';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var ElasticSearch
     */
    private $es;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var CasinoRepository
     */
    private $casinoRepository;
    /**
     * @var ScreenshotRepository
     */
    private $screenshotRepository;
    /**
     * @var string
     */
    private $uploadPath;
    /**
     * @var Filesystem
     */
    private $fs;

    private $http;

    private $mailer;



    public function __construct(Downloader $downloader, ElasticSearch $es, EntityManagerInterface $entityManager, $casinoLogoImagesUploadPath,Mailer $mailer,AdapterInterface $cache)
    {
        parent::__construct($cache);
        $this->downloader = $downloader;
        $this->es = $es;
        $this->casinoRepository = $entityManager->getRepository(Casino::class);
        $this->screenshotRepository = $entityManager->getRepository(Screenshot::class);
        $this->em = $entityManager;
        $this->uploadPath = $casinoLogoImagesUploadPath;
        $this->fs = new Filesystem();
        if (!$this->fs->exists($this->uploadPath)) {
            $this->fs->mkdir($this->uploadPath);
        }
        $this->http = new Client([
            'defaults' => ['verify' => false]
        ]);
        $this->mailer=$mailer;


    }

    function supports(string $name): string
    {
        return $name === self::FEED;
    }

    function import(SymfonyStyle $io)
    {
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note(sprintf('Fetching feed "%s"...', self::FEED));
        }
        set_time_limit(1200); // 30 mins....
        ini_set('max_execution_time', '1200');
        ini_set('memory_limit', '590M');
        $data = $this->downloader->fetch(self::FEED);
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->success(sprintf('Feed "%s" fetched!', self::FEED));
        }
        $existingCasinosIds=[];
        foreach ($data as $casinoData) {
            $downloadLogo=false;
            if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                $io->note(sprintf('Processing casino "%s"...', $casinoData['casinoname']));
            }
            $newId = $casinoData['id'] ?? null;
            $id = isset($casinoData['original_id']['original_id'])&&isset($casinoData['original_id']['iid'])&&$casinoData['original_id']['original_id']!=$casinoData['original_id']['iid']? $casinoData['original_id']['iid'] : $newId;

            $casino = $this->casinoRepository->find($id);
            if($casino instanceof Casino)
            {
                if(isset($casinoData['logo']))
                {
                    if($casino->getCasinologourl()!=$casinoData['logo']['url']) $downloadLogo=true;
                }
            }
            else{
                $casino=new Casino();
                $casino->setId($id);
                $downloadLogo=true;
                $casino->setHidden(1);
            }
            $existingCasinosIds[]=$casino->getId();

            $casino->setCasinoName($casinoData['casinoname']);

            $casino->setCasinoUrl((string) $casinoData['casinourl']);
            $casino->setUsallowed((bool) $casinoData['usallowed']);
            $casino->setNewId($newId);
            $casino->setClosed((bool) $casinoData['closed']);
            $casino->setBlacklisted((bool) $casinoData['blacklist']);
            $casino->setAveragerating(isset($casinoData['rating']) ?  number_format($casinoData['rating']['average'], 2) : 0);
            if (isset($casinoData['logo'])) {
                $casino->setCasinologo($casinoData['logo']['filename'] ?: null);
                $casino->setCasinologourl($casinoData['logo']['url'] ?: null);
            }
            $casino->setBannerlink($casinoData['banner'] ?? null);
            $casino->setSlug($this->generateSlug($casino->getCasinoname()));
        //    $this->es->insertCasino($id, $casino->getCasinoname());
            $casino = $this->em->merge($casino);

            $casinoUploadDir = $this->uploadPath.$casino->getId();
            $screenshotsUploadDir = $casinoUploadDir . '/screenshots';
            if(!$this->fs->exists($casinoUploadDir)) {
                $this->fs->mkdir($casinoUploadDir);
            }
            if(!$this->fs->exists($screenshotsUploadDir)) {
                $this->fs->mkdir($screenshotsUploadDir);
            }
            if ($downloadLogo && filter_var($casino->getCasinologourl(), FILTER_VALIDATE_URL)) {
                if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                    $io->note("Fetching logo...");
                }
                try{

                    $data = $this->http->get($casino->getCasinologourl())->getBody()->getContents();
                }
                catch (\Exception $e)
                {
                    echo $e->getMessage();
                    continue;
                }
                if ($data) {
                    $name = Uuid::uuid4()->toString() . '.png';
                    if(strlen($casino->getCasinologoimage()))
                    {
                        if($this->fs->exists($casinoUploadDir . '/' . $casino->getCasinologoimage())) $this->fs->remove($casinoUploadDir . '/' . $casino->getCasinologoimage());
                    }
                    file_put_contents($casinoUploadDir . '/' . $name, $data);
                    $casino->setCasinologoimage($name);

                    $imagine=new Imagine();

                    if($this->fs->exists($casinoUploadDir . '/35.png')) $this->fs->remove($casinoUploadDir . '/35.png');
                    $tfxtf = $imagine->open($casinoUploadDir . '/' . $name);
                    $tfxtf->resize(new Box(35, 35));
                    $tfxtf->save($casinoUploadDir . '/35.png');

                    if($this->fs->exists($casinoUploadDir . '/50.png')) $this->fs->remove($casinoUploadDir . '/50.png');
                    $fxf=$imagine->open($casinoUploadDir . '/' . $name);
                    $fxf->resize(new Box(50,50));
                    $fxf->save($casinoUploadDir . '/50.png');

                    if($this->fs->exists($casinoUploadDir . '/90.png')) $this->fs->remove($casinoUploadDir . '/90.png');
                    $nxn=$imagine->open($casinoUploadDir . '/' . $name);
                    $nxn->resize(new Box(90,90));
                    $nxn->save($casinoUploadDir . '/90.png');

                    if($this->fs->exists($casinoUploadDir . '/105.png')) $this->fs->remove($casinoUploadDir . '/105.png');
                    $oh5=$imagine->open($casinoUploadDir . '/' . $name);
                    $oh5->resize(new Box(105,105));
                    $oh5->save($casinoUploadDir . '/105.png');


                }
                $this->cache->invalidateTags(['casino']);
            }



            $screenshotDownload = [
                'screenshot' => [],
                'callSlide' => [],
                'callThumb' => []
            ];
            if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                $io->note("Fetching screenshots...");
            }

            foreach ($casinoData['screenshots'] as $screenshotData) {
                $screenshot = $this->screenshotRepository->find($screenshotData['id']) ?: new Screenshot();

                $url = $screenshotData['url'];
                if (filter_var($url, FILTER_VALIDATE_URL)) {
                    if ($io->getVerbosity() === OutputInterface::VERBOSITY_DEBUG) {
                        $io->note(sprintf('Processing screenshot "%s"', $url));
                    }
                    $thumb = str_replace("original", "block", $url);
                    if ($io->getVerbosity() === OutputInterface::VERBOSITY_DEBUG) {
                        $io->note(sprintf('Processing screenshot "%s"', $thumb));
                    }

                    $screenshot->setId($screenshotData['id']);
                    $screenshot->setFilename((string) $screenshotData['filename']);
                    $screenshot = $this->em->merge($screenshot);
                    $screenshot->setCasino($casino);

                    if ($screenshot->getUrl() != $url) {
                        $screenshotDownload['screenshot'] []= $screenshot;
                        $screenshotDownload['callSlide'] []= $this->http->getAsync($url);
                        $screenshotDownload['callThumb'] []= $this->http->getAsync($thumb);
                        $screenshot->setUrl($url);
                    }
                }
            }
            $resultsSlides = Promise\settle($screenshotDownload['callSlide'])->wait();
            $resultsThumb = Promise\settle($screenshotDownload['callThumb'])->wait();
            foreach ($resultsSlides as $k => $data) {
                if (isset($data['value'])) {
                    /** @var ResponseInterface $response */
                    $response = $data['value'];
                    if ($response->getStatusCode() === 200) {
                        $name = Uuid::uuid4()->toString() . '.jpg';
                        file_put_contents($screenshotsUploadDir . '/' . $name, $response->getBody()->getContents());
                        if(strlen($screenshot->getSlideimgsrc())>0 && $this->fs->exists($screenshotsUploadDir . '/' .$screenshot->getSlideimgsrc())){
                            $this->fs->remove($screenshotsUploadDir . '/' .$screenshot->getSlideimgsrc());
                        }
                        $screenshotDownload['screenshot'][$k]->setSlideimgsrc($name);
                    }
                }
            }
            foreach ($resultsThumb as $k => $data) {
                if (isset($data['value'])) {
                    /** @var ResponseInterface $response */
                    $response = $data['value'];
                    if ($response->getStatusCode() === 200) {
                        $name = Uuid::uuid4()->toString() . '.jpg';
                        file_put_contents($screenshotsUploadDir . '/' . $name, $response->getBody()->getContents());
                        if(strlen($screenshot->getThumbimgsrc())>0 && $this->fs->exists($screenshotsUploadDir . '/' .$screenshot->getThumbimgsrc())){
                            $this->fs->remove($screenshotsUploadDir . '/' .$screenshot->getThumbimgsrc());
                        }
                        $screenshotDownload['screenshot'][$k]->setThumbimgsrc($name);
                    }
                }
            }
            if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                $io->success(sprintf('Casino "%s" processed!', $casinoData['casinoname']));
            }
        }

        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }

        $this->em->getRepository(Casino::class)->deleteNonExistingCasinos($existingCasinosIds);
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Casinos imported!');
        }
    }

    private function generateSlug($name)
    {
        $name = trim($name, ". \t\n\r\0\x0B");
        $allowed = "/[^a-z0-9\\040\\.\\-\\_\\*\\ \\(\\)\\,\\:\\!\\@\\$\\~\\=\\;]/i";
        $name = preg_replace($allowed,"",$name);
        $name = preg_replace('/\s+/', '-', $name);
        $name = str_replace("UPDATE", "UP-DATE", $name); // fix weird error.
        $name = str_replace("SELECT", "-", $name); // fix weird error.
        $name = str_replace("-Blacklisted", "", $name); // fix weird error.
        $name = preg_replace('/-{2,}/', '-', $name);
        if(is_numeric($name)) {
            $name = $name . '!';
        }
        return $name;

    }


}