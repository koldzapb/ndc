<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Sonata\\CoreBundle\\Form\\Type', 4 => 'Sonata\\Form\\Type', 5 => 'Sonata\\BlockBundle\\Form\\Type', 6 => 'Sonata\\AdminBundle\\Form\\Type', 7 => 'Sonata\\AdminBundle\\Form\\Type\\Filter', 8 => 'FOS\\CKEditorBundle\\Form\\Type', 9 => ''], [0 => 'App\\Form\\ContactUsType', 1 => 'App\\Form\\NewsletterType', 2 => 'App\\Form\\UserType', 3 => 'App\\Form\\UserupdateType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 5 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 6 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 7 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 8 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 9 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 10 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 11 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 12 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 13 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 14 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 15 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 16 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 17 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 18 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 19 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 20 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 21 => 'Sonata\\Form\\Type\\ImmutableArrayType', 22 => 'Sonata\\Form\\Type\\BooleanType', 23 => 'Sonata\\Form\\Type\\CollectionType', 24 => 'Sonata\\Form\\Type\\DateRangeType', 25 => 'Sonata\\Form\\Type\\DateTimeRangeType', 26 => 'Sonata\\Form\\Type\\DatePickerType', 27 => 'Sonata\\Form\\Type\\DateTimePickerType', 28 => 'Sonata\\Form\\Type\\DateRangePickerType', 29 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 30 => 'Sonata\\Form\\Type\\EqualType', 31 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 32 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 33 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 34 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 35 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 36 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 37 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 38 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 39 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 40 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 41 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 42 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 43 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 44 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 45 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 46 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 47 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 48 => 'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType', 49 => 'FM\\ElfinderBundle\\Form\\Type\\ElFinderType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:form');

return $instance;
