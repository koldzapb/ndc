<?php

namespace App\Admin;

use App\Entity\Software;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;





class SoftwareAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
        {

            $formMapper->add('title',TextType::class, ['required' => false]);

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
                $datagridMapper->add('title');
            }

    protected function configureListFields(ListMapper $listMapper)
    {
                $listMapper->addIdentifier('title');
            }

    public function toString($object)
    {
                return $object instanceof Software
                        ? $object->getTitle()
                    : 'Software'; // shown in the breadcrumb on the create view
    }



}