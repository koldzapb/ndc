<?php
namespace App\Admin;

use App\Entity\Author;
use App\Entity\Casino;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CasinoAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Metadata')
            ->add('title', TextType::class,['required'=>false,'label'=>'Meta Title','attr' => ['maxlength' => 70]])
            ->add('metadescription',TextType::class,['required'=>false,'label'=>'Meta Description','attr' => ['maxlength' => 320]])
            ->add('metakeywords', TextType::class,['label'=>'Meta Keywords','required'=>false])
            ->end()
            ->with('Content')
            ->add('casinoname', TextType::class)
            ->add('customurl', TextType::class,['required'=>false])
            ->add('reviewtext',CKEditorType::class,['required'=>false])
            ->add('reviewtextauthor', ModelType::class, [
                'class' => Author::class,
                'property' => 'authorname',

            ])
            ->add('hidden',ChoiceType::class,[
                'choices'=>[
                    'no'=>0,
                    'yes'=>1
                ]

            ])
            ->add('dontShowFactualInformation',ChoiceType::class,[
                'choices'=>[
                    'disabled'=>0,
                    'enabled'=>1
                ]

            ])
            ->add('nodepositoftheweek',ChoiceType::class,[
                            'choices'=>[
                                'no'=>false,
                                'yes'=>true
                                        ]

        ])
        ->end();

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('casinoname');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('casinoname')
                    ->add('nodepositoftheweek')
        ;
    }



    public function toString($object)
    {
        return $object instanceof Casino
            ? $object->getCasinoname()
            : 'Casino'; // shown in the breadcrumb on the create view
    }

}