<?php


namespace App\Admin;

use App\Entity\Author;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class AuthorAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('authorname',TextType::class)
            ->add('authorurl',TextType::class,['required'=>false])
            ->add('bio',CKEditorType::class,['required'=>false])
            ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('authorname');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('authorname')

        ;
    }



    public function toString($object)
    {
        return $object instanceof Author
            ? $object->getAuthorname()
            : 'Casino'; // shown in the breadcrumb on the create view
    }

}