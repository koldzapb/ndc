<?php



namespace App\Admin;
use App\Entity\ArticleCategory;
use App\Entity\Author;
use App\Entity\News;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;




class NewsAdmin extends AbstractAdmin
{


    protected function configureFormFields(FormMapper $formMapper)
    {
        $coverImageHelp=($this->getSubject()->getFullImagelink()!=null)? '<img src="'.$this->getSubject()->getCoverImageLocation().'" class="admin-preview" width="200px"  />':"";
        $InnerImageHelp=($this->getSubject()->getInnerimage()!=null)? '<img src="'.$this->getSubject()->getImageLocation().'" class="admin-preview" width="200px"  />':"";

        $formMapper->with('Meta Data')
            ->add('metatitle',TextType::class,['label'=>'MetaTitle','attr' => ['maxlength' => 70]])
            ->add('metadescription',TextType::class,['label'=>'MetaDescription','attr' => ['maxlength' => 320]])
            ->add('metakeywords',TextType::class, ['required' => false])
            ->add('navigation',TextType::class,['required'=>false])
            ->end()
            ->with('Content')
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
            ->add('file',FileType::class,['required'=>false ,'data_class'=>null,'label'=>'Cover image:','help'=>$coverImageHelp])
            ->add('file1',FileType::class,['required'=>false ,'data_class'=>null,'label'=>'Inner image:','help'=>$InnerImageHelp])
            ->end()
            ->with('Author')
            ->add('author', ModelType::class, [
                'class' => Author::class,
                'placeholder'=>'choose',
                'property' => 'authorname',

            ])
            ->end()
            ->with('Category')
            ->add('category', ModelType::class, [
                'class' => ArticleCategory::class,
                'property' => 'name',
                'placeholder'=>'choose',


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
        return $object instanceof News
            ? $object->getHeading()
            : 'News'; // shown in the breadcrumb on the create view
    }



}