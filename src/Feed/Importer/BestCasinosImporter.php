<?php


namespace App\Feed\Importer;

use App\Entity\Casino;
use App\Entity\CountryGroups;
use App\Feed\Downloader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class BestCasinosImporter implements Importer
{
    const FEED = 'best_casinos';
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    private $countryGroupRepository;
    private $casinoRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->casinoRepository = $em->getRepository(Casino::class);
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

        foreach ($data as $casinoGroup) {
            if (!isset($casinoGroup['casino']['id']) || !isset($casinoGroup['country_group']['id'])) {
                continue;
            }
            $casino = $this->casinoRepository->findOneBy(['newid'=>$casinoGroup['casino']['id']])
                ?: $this->casinoRepository->find($casinoGroup['casino']['id']);
            $countryGroup=$this->countryGroupRepository->find($casinoGroup['country_group']['id']);

            if($casino instanceof Casino && $countryGroup instanceof CountryGroups) {
                $casino->addGroup($countryGroup);
            }
        }

        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Country groups imported!');
        }
    }
}