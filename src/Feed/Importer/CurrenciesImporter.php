<?php


namespace App\Feed\Importer;


use App\Entity\Currency;
use App\Feed\Downloader;
use App\Repository\CurrencyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CurrenciesImporter implements  Importer
{
    const FEED = 'lcb_currencies_options';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var CurrencyRepository
     */
    private $currenciesRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->currenciesRepository = $em->getRepository(Currency::class);
        $this->downloader = $downloader;
        $this->em = $em;
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

        foreach ($data as $currencyData) {
            $currency= $this->currenciesRepository->find($currencyData['id']) ?: new Currency($currencyData['id']);
            $currency->setCurrencyCode($currencyData['name']);
            $currency->setName($currencyData['title']);
            $currency->setAddedTime(new \DateTime($currencyData['added_time']));
            $currency->setUploadedTime(new \DateTime($currencyData['updated_time']));
            $currency->setSlug(str_replace([' ','/',''],'-',$currency->getName()));
            $currency->setImgsrc(strtolower(str_replace(' ', '_', $currency->getName())) . ".png");
            $this->em->merge($currency);

        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->getUnitOfWork()->clear();
        $this->em->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Currencies imported!');
        }
    }
}