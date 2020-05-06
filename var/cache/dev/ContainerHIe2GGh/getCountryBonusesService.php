<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\BonusRendering\CountryBonuses' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/BonusRendering/BonusRendering.php';
include_once \dirname(__DIR__, 4).'/src/BonusRendering/BonusRenderingInterface.php';
include_once \dirname(__DIR__, 4).'/src/BonusRendering/CountryBonuses.php';
include_once \dirname(__DIR__, 4).'/src/Utils/NewBonusesSorter.php';

return $this->privates['App\\BonusRendering\\CountryBonuses'] = new \App\BonusRendering\CountryBonuses(($this->privates['App\\Utils\\Locator'] ?? $this->load('getLocatorService.php')), ($this->privates['App\\Repository\\BonusRepository'] ?? $this->getBonusRepositoryService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Utils\\NewBonusesSorter'] ?? ($this->privates['App\\Utils\\NewBonusesSorter'] = new \App\Utils\NewBonusesSorter())), ($this->privates['App\\Utils\\BonusRender'] ?? $this->load('getBonusRenderService.php')));
