<?php

namespace App\Feed\Importer;

use Symfony\Component\Console\Style\SymfonyStyle;

interface Importer
{
    function supports(string $name): string;
    function import(SymfonyStyle $io);
}