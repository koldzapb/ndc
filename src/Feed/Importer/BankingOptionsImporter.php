<?php


namespace App\Feed\Importer;


use App\Entity\Banking;
use App\Feed\Downloader;
use App\Repository\BankingRepository;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

class BankingOptionsImporter implements Importer
{
    const FEED = 'lcb_banking_options';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var BankingRepository
     */
    private $bankingRepository;
    /**
     * @var string
     */
    private $uploadPath;
    /**
     * @var Filesystem
     */
    private $fs;
    /**
     * @var Client
     */
    private $http;

    public function __construct(Downloader $downloader, EntityManagerInterface $em, $bankingIconsUploadPath)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->bankingRepository = $em->getRepository(Banking::class);
        $this->fs = new Filesystem();
        $this->uploadPath = $bankingIconsUploadPath;
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
        $existingBankingOptions=[];
        foreach ($data as $bankingData) {
            $existingBankingOptions[]=$bankingData['id'];
            $banking = $this->bankingRepository->find($bankingData['id']) ?: new Banking($bankingData['id']);
            $bankingUploadDir =rtrim($this->uploadPath, '/');
            if($bankingData['icon']['url'] !== $banking->getUploadedimagesmalllink() && filter_var($bankingData['icon']['url'], FILTER_VALIDATE_URL)) {
                if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                    $io->note("Fetching image...");
                }
                $data = $this->http->get($bankingData['icon']['url'])->getBody()->getContents();
                if ($data) {
                    $name = Uuid::uuid4()->toString() . '.png';
                    file_put_contents($bankingUploadDir . '/' . $name, $data);
                    $banking->setImgsrc($name);
                }
            }
            $banking->setName($bankingData['name']);
            $banking->setTotalCountDeposit($bankingData['deposits']);
            $banking->setTotalCountWithdrawals($bankingData['withdrawals']);
            $banking->setAddedTime(new \DateTime($bankingData['added_time']));
            $banking->setUpdatedTime(new \DateTime($bankingData['updated_time']));
            $banking->setUploadedImageLink($bankingData['main_image']['url'] ?? null);
            $banking->setUploadedImageSmallLink($bankingData['icon']['url'] ?? null);
            $banking->setSlug($this->generateSlug($banking->getName()));
            $this->em->merge($banking);
            if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                $io->success(sprintf('Banking option "%s" processed!', $banking->getName()));
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }

        $nonExistingBankingMethods=$this->em->getRepository(Banking::class)->selectNonExistingBankingMethods($existingBankingOptions);

        foreach ($nonExistingBankingMethods as $bankingMethod){
            $bankingMethod=$this->em->merge($bankingMethod);
            $this->em->remove($bankingMethod);
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Banking options imported!');
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