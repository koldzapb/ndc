<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.Sonata\CoreBundle\Command\SonataListFormMappingCommand' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/CoreBundle/Command/SonataListFormMappingCommand.php';

return $this->services['console.command.public_alias.Sonata\\CoreBundle\\Command\\SonataListFormMappingCommand'] = new \Sonata\CoreBundle\Command\SonataListFormMappingCommand();
