<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.KsF9X_Z' shared service.

return $this->privates['.service_locator.KsF9X_Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'softwarePage' => ['privates', '.errored..service_locator.KsF9X_Z.App\\Entity\\SoftwaresList', NULL, 'Cannot autowire service ".service_locator.KsF9X_Z": it references class "App\\Entity\\SoftwaresList" but no such service exists.'],
], [
    'softwarePage' => 'App\\Entity\\SoftwaresList',
]);
