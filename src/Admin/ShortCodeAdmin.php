<?php

namespace App\Admin;

use App\Entity\ShortCode;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ShortCodeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('code',TextType::class)
            ->add('description',TextType::class);


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('code');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('code');
    }



    public function toString($object)
    {
        return $object instanceof ShortCode
            ? $object->getCode()
            : 'Casino'; // shown in the breadcrumb on the create view
    }

}