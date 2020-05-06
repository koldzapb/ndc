<?php


namespace App\Feed\Importer;


use App\Entity\Casino;
use App\Entity\Country;
use App\Feed\Downloader;
use App\Repository\CasinoRepository;
use App\Repository\CountryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CasinoRestrictedCountriesImporter implements Importer
{
    const FEED = 'lcb_casinos_restricted_countries';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var CasinoRepository
     */
    private $casinoRepository;

    /**
     * @var CountryRepository
     */
    private $countryRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->casinoRepository = $em->getRepository(Casino::class);
        $this->countryRepository = $em->getRepository(Country::class);
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

        foreach ($data as $casino_id => $restricted_countries) {
            $casino = $this->casinoRepository->findOneBy(['newid' => $casino_id]);
            if ($casino instanceof Casino) {
                $casino->getCountries()->clear();
                foreach ($restricted_countries as $restricted_country) {
                    $country = $this->countryRepository->find($restricted_country);
                    if ($country instanceof Country) {
                        $casino->addCountry($country);
                        $country->addCasino($casino);
                    }
                }
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Restricted countries for casinos imported!');
        }
    }
}