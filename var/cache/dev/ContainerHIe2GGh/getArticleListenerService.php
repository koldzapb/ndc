<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EntityListener\ArticleListener' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/EntityListener/ArticleListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

return $this->privates['App\\EntityListener\\ArticleListener'] = new \App\EntityListener\ArticleListener((\dirname(__DIR__, 4).'/public'.$this->getEnv('string:UPLOAD_PATH').'/article/'), $this->getEnv('string:UPLOAD_PATH').'/article/', ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($this->services['cache.app'] ?? $this->getCache_AppService()));
