<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.6umPiIs' shared service.

return $this->privates['.service_locator.6umPiIs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'metaGenerator' => ['privates', 'App\\Utils\\MetaGenerator', 'getMetaGeneratorService.php', true],
    'textReplacement' => ['privates', 'App\\TextReplacement\\TextReplacement', 'getTextReplacementService.php', true],
], [
    'metaGenerator' => 'App\\Utils\\MetaGenerator',
    'textReplacement' => 'App\\TextReplacement\\TextReplacement',
]);
