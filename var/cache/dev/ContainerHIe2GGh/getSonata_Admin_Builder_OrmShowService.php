<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.builder.orm_show' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/BuilderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Builder/ShowBuilderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Builder/ShowBuilder.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Guesser/TypeGuesserChain.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/AbstractTypeGuesser.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Guesser/TypeGuesser.php';

return $this->privates['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder(new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser()]), ['array' => '@SonataAdmin/CRUD/show_array.html.twig', 'boolean' => '@SonataAdmin/CRUD/show_boolean.html.twig', 'date' => '@SonataAdmin/CRUD/show_date.html.twig', 'time' => '@SonataAdmin/CRUD/show_time.html.twig', 'datetime' => '@SonataAdmin/CRUD/show_datetime.html.twig', 'text' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'email' => '@SonataAdmin/CRUD/show_email.html.twig', 'trans' => '@SonataAdmin/CRUD/show_trans.html.twig', 'string' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'smallint' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'bigint' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'integer' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'decimal' => '@SonataAdmin/CRUD/base_show_field.html.twig', 'currency' => '@SonataAdmin/CRUD/show_currency.html.twig', 'percent' => '@SonataAdmin/CRUD/show_percent.html.twig', 'choice' => '@SonataAdmin/CRUD/show_choice.html.twig', 'url' => '@SonataAdmin/CRUD/show_url.html.twig', 'html' => '@SonataAdmin/CRUD/show_html.html.twig']);
