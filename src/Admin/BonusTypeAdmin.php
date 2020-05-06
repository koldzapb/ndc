<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 6.3.18.
 * Time: 11.49
 */


namespace App\Admin;


use App\Entity\BonusType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BonusTypeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('Meta Data')
            ->add('name',TextType::class)
            ->add('imagefile',FileType::class,['required'=>false ,'data_class'=>null]);
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
        return $object instanceof BonusType
            ? $object->getName()
            : 'Article'; // shown in the breadcrumb on the create view
    }
}