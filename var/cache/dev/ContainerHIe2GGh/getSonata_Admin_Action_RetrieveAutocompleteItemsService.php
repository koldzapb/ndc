<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.action.retrieve_autocomplete_items' shared service.

include_once \dirname(__DIR__, 4).'/vendor/sonata-project/admin-bundle/src/Action/RetrieveAutocompleteItemsAction.php';

return $this->services['sonata.admin.action.retrieve_autocomplete_items'] = new \Sonata\AdminBundle\Action\RetrieveAutocompleteItemsAction(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()));
