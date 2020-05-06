<?php

namespace App\EntityListener;
use App\Entity\Author;
use App\Entity\MainPage;
use App\Entity\News;
use Doctrine\ORM\EntityManagerInterface;
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
class NewsListener
{
    private $uploadPath;
    private $webPath;
    private $entityManager;
    private $fs;
    private $cache;

    public function __construct(string $articleUploadPath,string $articleWebPath, EntityManagerInterface $entityManager,Filesystem $filesystem, AdapterInterface $adapter)
    {
        $this->cache=new TagAwareAdapter($adapter);
        $this->uploadPath = $articleUploadPath;
        $this->webPath=$articleWebPath;
        $this->entityManager=$entityManager;
        $this->fs=$filesystem;
        if (!$this->fs->exists($articleUploadPath)) {
            $this->fs->mkdir($articleUploadPath);
        }

    }

    public function preFlush(News $news, PreFlushEventArgs $event)
    {
        $newsPage=$this->entityManager->getRepository(MainPage::class)->findOneBy(['code'=>'News']);
        $newsPage->setLastmodified(new \DateTime());
        $this->entityManager->merge($newsPage);


        $file=$news->getFile();
        $file1=$news->getFile1();
        $timeadded=$news->getTimeadded();

        if(isset($file)) {

            $news->setFullimagelink($this->upload($news->getFile()));
        }


        if(isset($file1))
        {
            $news->setInnerimage($this->upload($news->getFile1()));

        }


        if($timeadded===null)
        {
            $news->setTimeadded(new \DateTime());
        }

        $author=$news->getAuthor();
        if($author instanceof Author && strlen($author->getSlug())<1){
            $author->setSlug(strtolower(str_replace(" ","_",$author->getAuthorname())));
        }
        $this->cache->invalidateTags(['news']);
    }


    public function postLoad(News $news)
    {

        $news->setImageLocation($this->webPath."/".$news->getInnerimage());
        $news->setCoverImageLocation($this->webPath.$news->getFullimagelink());
        $imageForSingleNews="";
        if($news->getInnerimage()!=null)
        {
            $imageForSingleNews.="<img alt='" . $news->getHeading() . "' class = 'singleNewsImg' src='" . $news->getImageLocation() . "'>";
        }
        elseif ($news->getFullimagelink()!=null)
        {
           $imageForSingleNews.= "<img alt='" . $news->getHeading() . "' class = 'singleNewsImg' src='" . $news->getCoverImageLocation() . "'>";
        }
            $news->setMainTextWithImage($imageForSingleNews . $news->getContent());


        if($news->getFullimagelink()) {
            if (!$this->fs->exists($this->uploadPath . $news->getId() . "news_360x220.jpeg")) {
                $imagine = new Imagine();
                $a360 = $imagine->open($this->uploadPath . $news->getFullimagelink());
                $a360->resize(new Box(360, 220));
                $a360->save($this->uploadPath . $news->getId() . "news_360x220.jpeg");
            }
        }
        $news->setImage360($this->webPath.$news->getId()."news_360x220.jpeg");

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