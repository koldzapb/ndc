<?php


namespace App\Admin;


use App\Entity\Country;
use App\Entity\CountryList;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CountryListAdmin extends AbstractAdmin
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
            ->add('tags',TextType::class,['label'=>'Tags','required'=>false])
            ->add('countryname',TextType::class,['label'=>'Country Name(shown in menu)'])
            ->add('heading',TextType::class,['label'=>'Heading','required'=>false])
            ->add('content',CKEditorType::class, ['required' => false,'label'=>'Content'])
            ->add('belowcontent',CKEditorType::class, ['required' => false,'label'=>'Below Content'])
            ->add('hasFaqs',ChoiceType::class,[
                'choices'=>
                    [
                        'No'=>false,
                        'Yes'=>true


                    ],
                'placeholder'=>'choose'
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
            ->add('referencedcountry', ModelType::class, [
                'class' => Country::class,
                'property' => 'name',

            ])
        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('countryname');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('countryname');
    }



    public function toString($object)
    {
        return $object instanceof CountryList
            ? $object->getCountryname()
            : 'CountryList'; // shown in the breadcrumb on the create view
    }

}