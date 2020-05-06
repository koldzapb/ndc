<?php

namespace App\Feed;

use Symfony\Component\Console\Style\SymfonyStyle;

class ImportManager
{
    /**
     * @var Importer\Importer[]
     */
    private $importers = [];

    public function __construct(iterable $importers = [])
    {
        $this->importers = $importers;
    }

    public function import($name, SymfonyStyle $io)
    {
        foreach ($this->importers as $importer) {
            if ($importer->supports($name)) {
                return $importer->import($io);
            }
        }
        throw new ImportTypeNotFound($name);
    }
}