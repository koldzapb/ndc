<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\NoDepositBonusCodesRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Repository/NoDepositBonusCodesRepository.php';

return $this->privates['App\\Repository\\NoDepositBonusCodesRepository'] = new \App\Repository\NoDepositBonusCodesRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
