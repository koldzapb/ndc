<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.templating' shared service.

@trigger_error('The "sonata.templating" service is deprecated since sonata-project/block-bundle 3.17 and will be removed in version 4.0.', E_USER_DEPRECATED);

return $this->privates['sonata.templating'] = new \Sonata\BlockBundle\Templating\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), $this->load('getSonata_Templating_NameParserService.php'), $this->load('getSonata_Templating_LocatorService.php'));
