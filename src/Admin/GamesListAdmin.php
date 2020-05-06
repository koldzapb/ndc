<?php


namespace App\Admin;


use App\Entity\GamesList;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;


class GamesListAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Metadata')
            ->add('metatitle',TextType::class,['label'=>'Meta Title','required'=>false,'attr' => ['maxlength' => 70]])
            ->add('metadescription',TextType::class,['label'=>'Meta Description','required'=>false,'attr' => ['maxlength' => 320]])
            ->add('metakeywords',TextType::class,['label'=>'Meta Keywords','required'=>false])
            ->end()
            ->with('Content')
            ->add('tags',TextType::class,['label'=>'Tags','required'=>false])
            ->add('Game',TextType::class)
            ->add('heading',TextType::class, ['required' => false,'label'=>'Heading'])
            ->add('content',CKEditorType::class, ['required' => false])
            ->add('belowcontent',CKEditorType::class, ['required' => false,'label'=>'Below Content'])
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
            ->end();
        ;

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('game');
    }



    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('game');
    }



    public function toString($object)
    {
        return $object instanceof GamesList
            ? $object->getGame()
            : 'GamesList'; // shown in the breadcrumb on the create view
    }

}