<?php


namespace App\Feed\Importer;

use App\Entity\Country;
use App\Entity\CountryGroups;
use App\Feed\Downloader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CountryGroupsImporter implements Importer
{
    const FEED = 'country_groups';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    private $countryGroupRepository;
    private $countryRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->countryRepository = $em->getRepository(Country::class);
        $this->countryGroupRepository = $em->getRepository(CountryGroups::class);
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

        foreach ($data as $group) {
            $countryGroup = $this->countryGroupRepository->find($group['id']) ?: new CountryGroups($group['id']);
            /** @var CountryGroups $countryGroup */
            $countryGroup = $this->em->merge($countryGroup);
            $countryGroup->setName($group['title']);
            foreach ($group['countries'] as $country) {
                $country = $this->countryRepository->find($country['id']);
                if($country instanceof Country) {
                    $country->setGroup($countryGroup);
                }
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->getUnitOfWork()->clear();
        $this->em->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Country groups imported!');
        }
    }
}