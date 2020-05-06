<?php

namespace App\EntityListener;


use App\Entity\ArticleCategory;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ArticleCategoryListener
{
    private $uploadImagePath;
    private $webImagePath;

    public function __construct($newsCategoryUploadPath,$newsCategoryWebPath)
    {
        $this->uploadImagePath=$newsCategoryUploadPath;
        $this->webImagePath=$newsCategoryWebPath;
        $fs = new Filesystem();
        if (!$fs->exists($newsCategoryUploadPath)) {
            $fs->mkdir($newsCategoryUploadPath);
        }
    }

    public function preFlush(ArticleCategory $articleCategory,PreFlushEventArgs $args)
    {
        $file=$articleCategory->getFile();
        if(isset($file))
        {
            $articleCategory->setImgsrc($this->upload($file));
        }
    }


    public function postLoad(ArticleCategory $articleCategory)
    {
        $articleCategory->setImglocation($this->webImagePath.$articleCategory->getImgsrc());
    }

    public function upload(?UploadedFile $file)
    {
        if (!($file instanceof UploadedFile)) {
            return null;
        }

        $name = sprintf("%s.%s", Uuid::uuid4()->toString(), $file->guessExtension());
        $file->move($this->uploadImagePath, $name);

        return $name;
    }

}
