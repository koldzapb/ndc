<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 6.3.18.
 * Time: 08.43
 */


namespace App\Admin;

use App\Entity\MainPage;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MainPageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('Meta Data')
            ->add('code',TextType::class)
            ->add('metatitle',TextType::class,['label'=>'Meta Title','attr' => ['maxlength' => 200]])
            ->add('metadescription',TextType::class,['label'=>'Meta Description','attr' => ['maxlength' => 320]])
            ->add('metakeywords',TextType::class)
            ->add('url',TextType::class,['required'=>false])
            ->add('navigation',TextType::class,['required'=>false])
            ->end()
            ->with('Content')
            ->add('tags',TextType::class,['required'=>false,'label'=>'Tags'])
            ->add('slug',TextType::class,['required'=>false])
            ->add('heading',TextType::class,['label'=>'Heading'])
            ->add('content',CKEditorType::class)
            ->add('mainfooter1',ChoiceType::class,['choices'=>['No'=>false,'Yes'=>true]])
            ->add('mainfooter2',ChoiceType::class,['choices'=>['No'=>false,'Yes'=>true]])
            ->end();

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
        return $object instanceof MainPage
            ? $object->getHeading()
            : 'Article'; // shown in the breadcrumb on the create view
    }
}
