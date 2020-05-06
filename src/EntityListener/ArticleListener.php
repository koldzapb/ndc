<?php

namespace App\EntityListener;
use App\Entity\Article;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use Ramsey\Uuid\Uuid;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 7.3.18.
 * Time: 14.51
 */
class ArticleListener
{
    private $uploadPath;
    private $webPath;
    private $fs;
    private $cache;

    public function __construct(string $articleUploadPath,string $articleWebPath,Filesystem $filesystem,AdapterInterface $adapter)
    {
        $this->uploadPath = $articleUploadPath;
        $this->webPath = $articleWebPath;
        $this->fs=$filesystem;
        if (!$this->fs->exists($articleUploadPath)) {
            $this->fs->mkdir($articleUploadPath);
        }
        $this->cache=new TagAwareAdapter($adapter);
    }

    public function preFlush(Article $article, PreFlushEventArgs $event)
    {
        $timeadded=$article->getTimeadded();
        if($timeadded===null)
        {
            $article->setTimeadded(new \DateTime());
        }
        $file1=$article->getFile();
        $file2=$article->getFile1();
        if(isset($file1)) {
            $article->setThumbnailimagelink($this->upload($article->getFile()));

        }

        if(isset($file2)) {
            $article->setMediumimagelink($this->upload($article->getFile1()));

        }
        $this->cache->invalidateTags(['articles']);



    }


    public function postLoad(Article $article)
    {
        $article->setImageLocation($this->webPath.$article->getThumbnailimagelink());
        $article->setInnerImage($this->webPath."/".$article->getMediumimagelink());
        $innerImage = "";
        if ($article->getMediumimagelink() != null) {
            $innerImage = "<img alt='" . $article->getHeading() . "' class='singleNewsImg' src='" . $article->getInnerImage() . "'>";
        } elseif ($article->getThumbnailimagelink() != null){
            $innerImage = "<img alt='" . $article->getHeading() . "' class='singleNewsImg' src='" . $article->getImageLocation() . "'>";
        }
        $article->setMaintextwithimage( $innerImage. $article->getContent());
        if($article->getThumbnailimagelink()) {
            if (!$this->fs->exists($this->uploadPath . $article->getId() . "_360x220.jpeg")) {
                $imagine = new Imagine();
                $a360 = $imagine->open($this->uploadPath . $article->getThumbnailimagelink());
                $a360->resize(new Box(360, 220));
                $a360->save($this->uploadPath . $article->getId() . "_360x220.jpeg");
            }
        }
        $article->setImage360($this->webPath.$article->getId()."_360x220.jpeg");

    }

    public function upload(?UploadedFile $file)
    {
        if (!($file instanceof UploadedFile)) {
            return null;
        }
        $name = sprintf("%s.%s", Uuid::uuid4()->toString(), $file->guessExtension());
        $file->move($this->uploadPath, $name);

        return $name;
    }
}