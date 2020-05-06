<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 5.11.18.
 * Time: 15.28
 */

namespace App\Admin;


use App\Entity\Currency;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CurrencyAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('heading', TextType::class,[
                'required'=>false,
                'label'=>'Heading'
            ]);


    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name');
    }



    public function toString($object)
    {
        return $object instanceof Currency
            ? $object->getName()
            : 'Currency'; // shown in the breadcrumb on the create view
    }
}