<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 7.3.18.
 * Time: 09.22
 */

namespace App\Admin;

use App\Entity\User;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('email',EmailType::class)
            ->add('admin',ChoiceType::class,[
                'choices'=>
                [
                    'User'=>false,
                    'Admin'=>true

                ]
            ])

        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('username');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username')
            ->add('email')
            ->add('admin')
        ;
    }



    public function toString($object)
    {
        return $object instanceof User
            ? $object->getUsername()
            : 'Casino'; // shown in the breadcrumb on the create view
    }

}