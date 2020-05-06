<?php


namespace App\Admin;


use App\Entity\BonusType;
use App\Entity\BonusValue;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BonusValueAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Meta Data')
            ->add('metadescription',TextType::class,['label'=>'Meta Description','attr' => ['maxlength' => 320]])
            ->add('metatitle',TextType::class, ['required' => false,'label'=>'Meta Title','attr' => ['maxlength' => 70]])
            ->add('metakeywords',TextType::class, ['label'=>'Meta Keywords','required' => false])
            ->end()
            ->with('Content')
            ->add('tags',TextType::class,['label'=>'Tags','required'=>false])
            ->add('value',TextType::class,['label'=>'Minimum value'])
            ->add('upperValue',TextType::class,['required'=>false,'label'=>'Maximum value'])
            ->add('symbol',TextType::class)
            ->add('heading',TextType::class)
            ->add('content',CKEditorType::class,['required'=>false])
            ->add('belowcontent',CKEditorType::class,['required'=>false,'label'=>'Below Content'])
            ->add('slug',TextType::class)
            ->add('bonustype', ModelType::class, [
                'class' => BonusType::class,
                'property' => 'name',

            ])
            ->add('mainfooter1',ChoiceType::class,[
                'choices'=>
                    [
                        'No'=>false,
                        'Yes'=>true


                    ]
            ])
            ->add('mainfooter2',ChoiceType::class,[
                'choices'=>
                    [
                        'No'=>false,
                        'Yes'=>true


                    ]
            ])
            ->end()
        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('heading');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('heading');
    }



    public function toString($object)
    {
        return $object instanceof BonusValue
            ? $object->getHeading()
            : 'CountryList'; // shown in the breadcrumb on the create view
    }

}