<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.orm.filter.type.time' service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/FilterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Filter/Filter.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/Filter.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/AbstractDateFilter.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Filter/TimeFilter.php';

$this->factories['sonata.admin.orm.filter.type.time'] = function () {
    return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
};

return $this->factories['sonata.admin.orm.filter.type.time']();
