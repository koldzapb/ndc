<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\LanguageRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Repository/LanguageRepository.php';

return $this->privates['App\\Repository\\LanguageRepository'] = new \App\Repository\LanguageRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
