<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\CasinoBankingRepository' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Repository/CasinoBankingRepository.php';

return $this->privates['App\\Repository\\CasinoBankingRepository'] = new \App\Repository\CasinoBankingRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
