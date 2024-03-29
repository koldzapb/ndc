<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_list' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/ListBuilderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/ListBuilder.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserChain.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/AbstractTypeGuesser.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/TypeGuesser.php';

return $this->privates['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder(new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser()]), ['array' => '@SonataAdmin/CRUD/list_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/list_boolean.html.twig', 'date' => '@SonataAdmin/CRUD/list_date.html.twig', 'time' => '@SonataAdmin/CRUD/list_time.html.twig', 'datetime' => '@SonataAdmin/CRUD/list_datetime.html.twig', 'text' => '@SonataAdmin/CRUD/list_string.html.twig', 'textarea' => '@SonataAdmin/CRUD/list_string.html.twig', 'email' => '@SonataAdmin/CRUD/list_email.html.twig', 'trans' => '@SonataAdmin/CRUD/list_trans.html.twig', 'string' => '@SonataAdmin/CRUD/list_string.html.twig', 'smallint' => '@SonataAdmin/CRUD/list_string.html.twig', 'bigint' => '@SonataAdmin/CRUD/list_string.html.twig', 'integer' => '@SonataAdmin/CRUD/list_string.html.twig', 'decimal' => '@SonataAdmin/CRUD/list_string.html.twig', 'identifier' => '@SonataAdmin/CRUD/list_string.html.twig', 'currency' => '@SonataAdmin/CRUD/list_currency.html.twig', 'percent' => '@SonataAdmin/CRUD/list_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/list_choice.html.twig', 'url' => '@SonataAdmin/CRUD/list_url.html.twig', 'html' => '@SonataAdmin/CRUD/list_html.html.twig']);
