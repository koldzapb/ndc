<?php


namespace App\Feed\Importer;


use App\Entity\Country;
use App\Entity\Software;
use App\Feed\Downloader;
use App\Repository\CountryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use GuzzleHttp\Client;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

class SoftwareImporter implements Importer
{
    const FEED = 'lcb_software';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var Filesystem 
     */
    private $fs;
    /**
     * @var string
     */
    private $uploadPath;
    /**
     * @var Client 
     */
    private $http;
    /**
     * @var CountryRepository
     */
    private $countryRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em, $softwareImagesUploadPath)
    {
        $this->fs = new Filesystem();
        $this->downloader = $downloader;
        $this->em = $em;
        $this->countryRepository = $em->getRepository(Country::class);
        $this->uploadPath = $softwareImagesUploadPath;
        if (!$this->fs->exists($this->uploadPath)) {
            $this->fs->mkdir($this->uploadPath);
        }
        $this->http = new Client([
            'defaults' => ['verify' => false]
        ]);
        
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
        $data = $this->downloader->fetch(self::FEED);
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->success(sprintf('Feed "%s" fetched!', self::FEED));
        }

        foreach ($data as $softwareData) {
            $software = new Software();
            $software->setId($softwareData['id']);
            $software->setTitle($softwareData['title']);
            $software->setTotalLinkedCasinos(isset($softwareData['total_linked_casinos']) && $softwareData['total_linked_casinos'] != "" ? $softwareData['total_linked_casinos'] : 0);
            $software->setTimeAded(new \DateTime($softwareData['time_added']));
            $software->setTimeUpdated(new \DateTime($softwareData['time_updated']));
            $software->setImageLink(isset($softwareData['icon']['url']) && $softwareData['icon']['url'] != "" ? $softwareData['icon']['url'] : null);
            $software->setUploadedImageLink(isset($softwareData['logo']['url']) && $softwareData['logo']['url'] != "" ? $softwareData['logo']['url'] : null);
            $software->setPageUrl(str_replace("/casinos/software/", "", $softwareData['seo_section']['site_path']));

            $softwareUploadDir = $this->uploadPath. $softwareData['id'];
            $imageName = strtolower(str_replace([" ","'"], '_', $softwareData['title'])) . '.png';
            if(!$this->fs->exists($softwareUploadDir)) {
                $this->fs->mkdir($softwareUploadDir);
            }
            if ($software->getImageLink()) {
                if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                    $io->note("Fetching image...");
                }
                try{
                    $data = $this->http->get($software->getImageLink())->getBody()->getContents();
                }
                catch (\Exception $e)
                {
                    echo  $e->getMessage();
                    continue;
                }
                if ($data) {
                    if($this->fs->exists($softwareUploadDir . '/' . $imageName))
                    {
                        $this->fs->remove($softwareUploadDir . '/' . $imageName);
                    }
                    file_put_contents($softwareUploadDir . '/' . $imageName, $data);
                    $software->setImgsrc($imageName);

                    if($this->fs->exists($softwareUploadDir . '/s25.png' ))
                    {
                        $this->fs->remove($softwareUploadDir . '/s25.png');
                    }
                    $imagine=new Imagine();
                    $s25=$imagine->open($softwareUploadDir . '/' . $imageName);
                    $s25->resize(new Box(25,15));
                    $s25->save($softwareUploadDir . '/s25.png');
                }
            }
            /** @var Software $software */
            $software = $this->em->merge($software);
            if ($softwareData['country_restrictions'] !== null) {
                foreach ($softwareData['country_restrictions'] as $restrictedCountry) {
                    $country = $this->countryRepository->find($restrictedCountry);
                    if ($country) {
                        $software->addRestrictedCountry($country);
                        $country->addRestrictedSoftware($software);
                    }
                }
            }
            if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                $io->success(sprintf('Software "%s" processed!', $software->getTitle()));
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Software imported!');
        }
    }
}