<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.helper' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Admin/AdminHelper.php';

return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
