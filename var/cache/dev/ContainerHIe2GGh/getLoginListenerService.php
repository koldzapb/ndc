<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventListener\LoginListener' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/EventListener/LoginListener.php';

return $this->privates['App\\EventListener\\LoginListener'] = new \App\EventListener\LoginListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
