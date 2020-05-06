<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ($this->privates['templating.cache_warmer.template_paths'] ?? $this->load('getTemplating_CacheWarmer_TemplatePathsService.php'));
    yield 1 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->load('getValidator_Mapping_CacheWarmerService.php'));
    yield 2 => ($this->privates['translation.warmer'] ?? $this->load('getTranslation_WarmerService.php'));
    yield 3 => ($this->privates['router.cache_warmer'] ?? $this->load('getRouter_CacheWarmerService.php'));
    yield 4 => ($this->privates['annotations.cache_warmer'] ?? $this->load('getAnnotations_CacheWarmerService.php'));
    yield 5 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->load('getDoctrine_Orm_ProxyCacheWarmerService.php'));
    yield 6 => ($this->privates['twig.cache_warmer'] ?? $this->load('getTwig_CacheWarmerService.php'));
    yield 7 => ($this->privates['twig.template_cache_warmer'] ?? $this->load('getTwig_TemplateCacheWarmerService.php'));
    yield 8 => ($this->services['sonata.admin.route.cache_warmup'] ?? $this->load('getSonata_Admin_Route_CacheWarmupService.php'));
    yield 9 => ($this->privates['webpack_encore.entrypoint_lookup.cache_warmer'] ?? $this->load('getWebpackEncore_EntrypointLookup_CacheWarmerService.php'));
}, 10), true, ($this->targetDir.''.'/srcApp_KernelDevDebugContainerDeprecations.log'));
