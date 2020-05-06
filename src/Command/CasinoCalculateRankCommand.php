<?php

namespace App\Command;

use App\Repository\CasinoRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CasinoCalculateRankCommand extends Command
{
    protected static $defaultName = 'app:casino:calculate-rank';
    /**
     * @var CasinoRepository
     */
    private $casinoRepository;

    public function __construct(CasinoRepository $casinoRepository, ?string $name = null)
    {
        parent::__construct($name);
        $this->casinoRepository = $casinoRepository;
    }


    protected function configure()
    {
        $this
            ->setDescription('Calculate casino rank')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $this->casinoRepository->calculateAwardRank();
        $io->success('Award ranks calculated!');
    }
}
