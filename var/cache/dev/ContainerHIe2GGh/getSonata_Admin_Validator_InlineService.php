<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.validator.inline' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 4).'/vendor/sonata-project/core-bundle/src/Form/Validator/InlineValidator.php';

return $this->services['sonata.admin.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ($this->privates['validator.validator_factory'] ?? $this->getValidator_ValidatorFactoryService()));
