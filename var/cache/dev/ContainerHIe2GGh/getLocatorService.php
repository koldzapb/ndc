<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Utils\Locator' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Utils/Locator.php';

return $this->privates['App\\Utils\\Locator'] = new \App\Utils\Locator((\dirname(__DIR__, 3).'/geoip.mmdb'), ($this->privates['App\\Repository\\CountryRepository'] ?? $this->load('getCountryRepositoryService.php')));
