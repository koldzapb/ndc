<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Utils\BonusRender' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Utils/BonusRender.php';

return $this->privates['App\\Utils\\BonusRender'] = new \App\Utils\BonusRender(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['templating'] ?? $this->load('getTemplatingService.php')), '/images/country/');
