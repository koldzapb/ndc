<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\ElasticSearch\ElasticSearch' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/ElasticSearch/ElasticSearch.php';

return $this->privates['App\\ElasticSearch\\ElasticSearch'] = new \App\ElasticSearch\ElasticSearch($this->getEnv('ELASTICSEARCH_SERVER'));
