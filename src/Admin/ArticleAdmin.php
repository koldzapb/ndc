<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 6.3.18.
 * Time: 11.49
 */


namespace App\Admin;

use App\Entity\Article;
use App\Entity\ArticleCategory;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $coverImageHelp=($this->getSubject()->getThumbnailimagelink()!=null)? '<img src="'.$this->getSubject()->getImageLocation().'" class="admin-preview" width="200px"  />':"";
        $InnerImageHelp=($this->getSubject()->getMediumimagelink()!=null)? '<img src="'.$this->getSubject()->getInnerImage().'" class="admin-preview" width="200px"  />':"";



        $formMapper->with('Meta Data')
            ->add('metatitle',TextType::class,['label'=>'MetaTitle','attr' => ['maxlength' => 70]])
            ->add('metadescription',TextType::class,['label'=>'MetaDescription','attr' => ['maxlength' => 320]])
            ->add('metakeywords',TextType::class)
            ->add('navigation',TextType::class,['required'=>false])
            ->add('slug',TextType::class,['required'=>false,'attr' => ['readonly' => $this->isCurrentRoute('create')?false:true]])
            ->end()
            ->with('Content')
            ->add('tags',TextType::class,['required'=>false,'label'=>'Tags'])
            ->add('heading',TextType::class,['label'=>'Heading'])
            ->add('content',CKEditorType::class)
            ->add('mainfooter1',ChoiceType::class,['choices'=>['No'=>false,'Yes'=>true]])
            ->add('mainfooter2',ChoiceType::class,['choices'=>['No'=>false,'Yes'=>true]])
            ->add('live',ChoiceType::class,[
                'choices'=>
                    [
                        'No'=>false,
                        'Yes'=>true


                    ]
            ])
            ->end()
            ->with('Images')
            ->add('file',FileType::class,['required'=>false ,'data_class'=>null,'label'=>'Cover Image','help'=>$coverImageHelp])
            ->add('file1',FileType::class,['required'=>false ,'data_class'=>null,'label'=>'Inner Image','help'=>$InnerImageHelp])
            ->end()
            ->with('Category')
            ->add('category', ModelType::class, [
            'class' => ArticleCategory::class,
            'property' => 'name',

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
        $listMapper->addIdentifier('heading')
        ->add('live')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Article
            ? $object->getHeading()
            : 'Article'; // shown in the breadcrumb on the create view
    }
}