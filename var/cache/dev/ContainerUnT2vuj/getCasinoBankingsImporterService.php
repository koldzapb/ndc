<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Feed\Importer\CasinoBankingsImporter' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Feed/Importer/Importer.php';
include_once \dirname(__DIR__, 4).'/src/Feed/Importer/CasinoBankingsImporter.php';
include_once \dirname(__DIR__, 4).'/src/Feed/Downloader.php';

return $this->privates['App\\Feed\\Importer\\CasinoBankingsImporter'] = new \App\Feed\Importer\CasinoBankingsImporter(($this->privates['App\\Feed\\Downloader'] ?? ($this->privates['App\\Feed\\Downloader'] = new \App\Feed\Downloader($this->getEnv('FEED_TOKEN')))), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
