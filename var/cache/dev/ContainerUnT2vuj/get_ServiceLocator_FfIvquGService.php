<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ffIvquG' shared service.

return $this->privates['.service_locator.ffIvquG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'singleNews' => ['privates', '.errored..service_locator.ffIvquG.App\\Entity\\News', NULL, 'Cannot autowire service ".service_locator.ffIvquG": it references class "App\\Entity\\News" but no such service exists.'],
    'textReplacement' => ['privates', 'App\\TextReplacement\\TextReplacement', 'getTextReplacementService.php', true],
], [
    'singleNews' => 'App\\Entity\\News',
    'textReplacement' => 'App\\TextReplacement\\TextReplacement',
]);
