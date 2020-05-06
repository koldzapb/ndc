<?php


namespace App\Feed\Importer;


use App\Entity\Casino;
use App\Entity\Software;
use App\Feed\Downloader;
use App\Repository\CasinoRepository;
use App\Repository\SoftwareRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CasinoSoftwareImporter implements Importer
{
    const FEED = 'site_casino_software';

    /**
     * @var CasinoRepository
     */
    private $casinoRepository;

    /**
     * @var SoftwareRepository
     */
    private $softwareRepository;
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var Downloader
     */
    private $downloader;

    public function __construct(EntityManagerInterface $em, Downloader $downloader)
    {
        $this->em = $em;
        $this->downloader = $downloader;
        $this->casinoRepository = $em->getRepository(Casino::class);
        $this->softwareRepository = $em->getRepository(Software::class);
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

        foreach ($data as $cs) {
            $casino = $this->casinoRepository->findOneBy(['newid' => $cs['casino_id']]);
            $software = $this->softwareRepository->find($cs['soft']['id']);
            if ($casino instanceof Casino && $software instanceof Software) {
                $casino->addSoftware($software);
                $software->addCasino($casino);
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->getUnitOfWork()->clear();
        $this->em->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Casino software imported!');
        }
    }
}