<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\RegisterLogin\GoogleSignIn' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/RegisterLogin/SocialInterface.php';
include_once \dirname(__DIR__, 4).'/src/RegisterLogin/GoogleSignIn.php';

return $this->privates['App\\RegisterLogin\\GoogleSignIn'] = new \App\RegisterLogin\GoogleSignIn(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
