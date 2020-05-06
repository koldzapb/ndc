<?php


namespace App\Admin;


use App\Entity\Software;
use App\Entity\SoftwaresList;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SoftwaresListAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with("Meta Data")
            ->add('metatitle',TextType::class,['label'=>'Meta Title','required'=>false,'attr' => ['maxlength' => 70]])
            ->add('metadescription',TextType::class,['label'=>'Meta Description','required'=>false,'attr' => ['maxlength' => 320]])
            ->add('metakeywords',TextType::class,['label'=>'Meta Keywords','required'=>false])
            ->end()
            ->with("Content")
            ->add('softwarename',TextType::class,['label'=>'Software Name'])
            ->add('anchorname',TextType::class,['label'=>'Link (dropdown) text'])
            ->add('software', ModelType::class, [
                'class' => Software::class,
                'property' => 'title',

            ])
            ->add('tags',TextType::class,['label'=>'Tags','required'=>false])
            ->add('heading',TextType::class,['label'=>'Heading','required'=>false])
            ->add('content',CKEditorType::class, ['required' => false,'label'=>'Content'])
            ->add('belowcontent',CKEditorType::class, ['required' => false,'label'=>'Below Content'])
            ->add('hasFaqs',ChoiceType::class,[
                'choices'=>
                    [
                        'No'=>false,
                        'Yes'=>true


                    ]
            ])
            ->add('mainfooter1',ChoiceType::class,[
                'placeholder'=>'choose',
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
        $datagridMapper->add('softwarename');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('softwarename');
    }



    public function toString($object)
    {
        return $object instanceof SoftwaresList
            ? $object->getSoftwarename()
            : 'CountryList'; // shown in the breadcrumb on the create view
    }

}