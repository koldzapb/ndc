<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.

include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

$this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = $instance = new \Doctrine\ORM\Tools\AttachEntityListenersListener();

$instance->addEntityListener('App\\Entity\\ArticleCategory', 'App\\EntityListener\\ArticleCategoryListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\ArticleCategory', 'App\\EntityListener\\ArticleCategoryListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Article', 'App\\EntityListener\\ArticleListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\Article', 'App\\EntityListener\\ArticleListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Banking', 'App\\EntityListener\\BankingListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Bonus', 'App\\EntityListener\\BonusListener', 'prePersist');
$instance->addEntityListener('App\\Entity\\BonusType', 'App\\EntityListener\\BonusTypeListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\BonusType', 'App\\EntityListener\\BonusTypeListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Casino', 'App\\EntityListener\\CasinoListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Casino', 'App\\EntityListener\\CasinoListener', 'preUpdate');
$instance->addEntityListener('App\\Entity\\CountryList', 'App\\EntityListener\\CountryListListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\Country', 'App\\EntityListener\\CountryListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Currency', 'App\\EntityListener\\CurrencyListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\GamesList', 'App\\EntityListener\\GamesListListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\Language', 'App\\EntityListener\\LanguageListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\News', 'App\\EntityListener\\NewsListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\News', 'App\\EntityListener\\NewsListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Screenshot', 'App\\EntityListener\\ScreenshotListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\Software', 'App\\EntityListener\\SoftwareListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\SoftwaresList', 'App\\EntityListener\\SoftwaresListListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\User', 'App\\EntityListener\\UserListener', 'preFlush');
$instance->addEntityListener('App\\Entity\\User', 'App\\EntityListener\\UserListener', 'postLoad');
$instance->addEntityListener('App\\Entity\\User', 'App\\EntityListener\\UserListener', 'preUpdate');

return $instance;
