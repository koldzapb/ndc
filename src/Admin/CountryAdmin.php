<?php



namespace App\Admin;
use App\Entity\Country;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CountryAdmin extends AbstractAdmin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('Meta Data')
            ->add('jurisdictionCheck',ChoiceType::class, [
                'required' => false,
                'placeholder'=>'choose',
                'choices'=>[
                    'no'=>false,
                    'yes'=>true

                ]
            ])
            ->end();

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
        return $object instanceof Country
            ? $object->getName()
            : 'Country'; // shown in the breadcrumb on the create view
    }

}