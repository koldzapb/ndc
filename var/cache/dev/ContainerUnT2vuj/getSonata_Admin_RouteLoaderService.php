<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route_loader' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/AdminPoolLoader.php';

return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), [0 => 'admin.casino', 1 => 'admin.mainpage', 2 => 'admin.article', 3 => 'admin.user', 4 => 'admin.news', 5 => 'admin.articlecategory', 6 => 'admin.countrylist', 7 => 'admin.softwareslist', 8 => 'admin.gameslist', 9 => 'admin.author', 10 => 'admin.bonustype', 11 => 'admin.bonusvalue', 12 => 'admin.software', 13 => 'admin.country', 14 => 'admin.shortcode', 15 => 'admin.currency', 16 => 'admin.bonus', 17 => 'admin.contactus'], $this);
