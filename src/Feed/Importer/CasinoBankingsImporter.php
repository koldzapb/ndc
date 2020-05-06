<?php


namespace App\Feed\Importer;


use App\Entity\Banking;
use App\Entity\Casino;
use App\Entity\CasinoBanking;
use App\Feed\Downloader;
use App\Repository\BankingRepository;
use App\Repository\CasinoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CasinoBankingsImporter implements Importer
{
    const FEED = 'lcb_banking_casinos';
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
     * @var BankingRepository
     */
    private $bankingRepository;

    public function __construct(Downloader $downloader, EntityManagerInterface $em)
    {
        $this->downloader = $downloader;
        $this->em = $em;
        $this->casinoRepository = $em->getRepository(Casino::class);
        $this->bankingRepository = $em->getRepository(Banking::class);
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
        if($data){
            $this->em->getRepository(CasinoBanking::class)->deleteAll();
        }

        foreach ($data as $bankingData) {
            $casino = $this->casinoRepository->findOneBy(['newid' => $bankingData['casino_id']]);
            $banking = $this->bankingRepository->find($bankingData['banking_id']);

            if ($casino instanceof Casino && $banking instanceof Banking) {
                $casinoBanking = new CasinoBanking();
                $casinoBanking->setId($bankingData['id']);
                $casinoBanking->setBanking($banking);
                $casinoBanking->setCasino($casino);
                $casinoBanking->setAllowsDeposits((bool) ($bankingData['allows_deposits'] ?? false));
                $casinoBanking->setAllowsWithdrawals((bool) ($bankingData['allows_withdrawals'] ?? false));
                $this->em->merge($casinoBanking);
            }
        }
        if ($io->getVerbosity() > OutputInterface::VERBOSITY_NORMAL) {
            $io->note('Saving...');
        }
        $this->em->flush();
        $this->em->clear();
        $this->em->getUnitOfWork()->clear();
        if ($io->getVerbosity() >= OutputInterface::VERBOSITY_NORMAL) {
            $io->success('Casino bankings imported!');
        }
    }
}
