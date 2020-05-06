<?php


namespace App\Admin;


use App\Entity\ContactUs;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactUsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', TextType::class,[
                'label'=>'Name',
                'attr' => array(
                    'readonly' => true,
                ),
            ])
            ->add('email', TextType::class,[
                'label'=>'Email',
                'attr' => array(
                    'readonly' => true,
                ),
            ])
            ->add('content', TextareaType::class,[
                'label'=>'Content',
                'attr' => array(
                    'readonly' => true,
                ),
            ])
            ->add('seen',ChoiceType::class,[
                'choices'=>
                    [
                        'No'=>false,
                        'Yes'=>true


                    ]
            ])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('email');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('email')
            ->add('seen')
        ;
    }
    public function toString($object)
    {
        return $object instanceof ContactUs
            ? $object->getEmail()
            : 'Article'; // shown in the breadcrumb on the create view
    }

}