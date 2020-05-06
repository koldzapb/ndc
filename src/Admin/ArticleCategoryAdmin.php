<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 8.3.18.
 * Time: 11.58
 */

namespace App\Admin;

use App\Entity\ArticleCategory;
use App\Entity\User;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleCategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name',TextType::class)
            ->add('introText',CKEditorType::class)
            ->end()
            ->with('Image')
            ->add('file',FileType::class,['required'=>false ,'data_class'=>null]);

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
        return $object instanceof ArticleCategory
            ? $object->getName()
            : 'Casino'; // shown in the breadcrumb on the create view
    }

}