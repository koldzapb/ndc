<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.twig.status_runtime' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Twig/Extension/StatusRuntime.php';

$this->privates['sonata.core.twig.status_runtime'] = $instance = new \Sonata\Twig\Extension\StatusRuntime();

$instance->addStatusService(($this->services['sonata.core.flashmessage.manager'] ?? $this->load('getSonata_Core_Flashmessage_ManagerService.php')));

return $instance;
