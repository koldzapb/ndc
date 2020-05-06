<?php

namespace App\Command;

use App\Feed\ImportManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class ImportCommand extends Command
{
    protected static $defaultName = 'app:import';

    private $importer;

    private $em;

    private $importTypes = [
        'casinos' => 'site_casinos',
        'countries' => 'regions',
        'software' => 'lcb_software',
        'casino-software' => 'site_casino_software',
        'banking' => 'lcb_banking_options',
        'currencies' => 'lcb_currencies_options',
        'languages' => 'lcb_languages_options',
        'casino-restricted-countries' => 'lcb_casinos_restricted_countries',
        'casino-languages' => 'lcb_languages_casinos',
        'casino-currencies' => 'lcb_currencies_casinos',
        'casino-banking' => 'lcb_banking_casinos',
        'bonuses' => 'site_bonuses',
        'bonuses-restricted-countries' => 'bonus_restricted_countries',
        'country-groups' => 'country_groups',
        'best-casinos' => 'best_casinos',
        'jurisdictions'=>'casino_jurisdictions',
        'no-deposit-codes'=>'nd_codes'
    ];

    public function __construct(ImportManager $importer,EntityManagerInterface $em, ?string $name = null)
    {
        parent::__construct($name);
        $this->importer = $importer;
        $this->em=$em;
    }

    protected function configure()
    {
        $this->setDescription('Add a short description for your command')
             ->addOption('feeds', 'f', InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL);
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);
        $io = new SymfonyStyle($input, $output);

        $missingFeeds = array_diff($input->getOption('feeds'), array_keys($this->importTypes));
        foreach ($missingFeeds as $missingFeed) {
            $io->warning(sprintf('Unknown feed "%s"', $missingFeed));
        }

        $importTypes = count($input->getOption('feeds')) > 0 ?
            array_intersect_key($this->importTypes, array_flip($input->getOption('feeds')))
            : $this->importTypes;

        foreach ($importTypes as $importType) {
            $this->importer->import($importType, $io);
        }
        if (count($importTypes)) {
            $io->success('Done!');
        }
    }
}