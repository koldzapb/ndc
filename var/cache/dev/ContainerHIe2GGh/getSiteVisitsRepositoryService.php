<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\SiteVisitsRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Repository/SiteVisitsRepository.php';

return $this->privates['App\\Repository\\SiteVisitsRepository'] = new \App\Repository\SiteVisitsRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
