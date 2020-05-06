<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.block.search_result' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/BlockServiceInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/BlockServiceInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/block-bundle/src/Block/Service/AbstractBlockService.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Block/AdminSearchBlockService.php';

return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['sonata.templating'] ?? $this->load('getSonata_TemplatingService.php')), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.search.handler'] ?? $this->load('getSonata_Admin_Search_HandlerService.php')));
