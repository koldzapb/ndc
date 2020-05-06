<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.route.query_string' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/RouteBuilderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Route/QueryStringBuilder.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Model/AuditManager.php';

return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder(($this->services['sonata.admin.audit.manager'] ?? ($this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this))));
