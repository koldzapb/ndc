<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\CustomBonusRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Repository/CustomBonusRepository.php';

return $this->privates['App\\Repository\\CustomBonusRepository'] = new \App\Repository\CustomBonusRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
