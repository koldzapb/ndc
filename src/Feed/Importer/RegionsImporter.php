<?php


namespace App\Feed\Importer;


use App\Entity\Country;
use App\Feed\Downloader;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class RegionsImporter implements Importer
{
    const FEED = 'regions';

    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
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

        foreach ($data as $countryData) {
            $country=$this->em->getRepository(Country::class)->findOneBy(['id'=>$countryData['id']]);
            $country=($country instanceof Country)?$country:new Country();
            $country->setId($countryData['id']);
            $country->setName($countryData['country_title']);
            $country->setCountryCode($countryData['country_code']);
            $country->setCitizens($countryData['citizens']);
            $country->setDateAdded(new \DateTime($countryData['date_added']));
            $country->setDateUpdated(new \DateTime($countryData['date_updated']));
            $country->setContinentId($countryData['continent_id']);
            $country->setLat($countryData['lat']);
            $country->setLng($countryData['lng']);
            $country->setCountryId($countryData['country_id']);
            $country->setHidden($countryData['hidden']);
            if($country->getJurisdictionCheck()==null){
                $country->setJurisdictionCheck(0);
            }
            try{
                $this->em->merge($country);
            }
            catch(EntityNotFoundException $e)
            {
                $this->em->persist($country);
            }
            if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
                $io->success(sprintf('Region "%s" processed!', $countryData['country_title']));
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->getUnitOfWork()->clear();
        $this->em->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Regions imported!');
        }
    }
}