<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{



    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    const SERVER_PATH_TO_IMAGE_FOLDER = '/var/www/ndcsymfony/skeleton/public/img/articles/proba';



    /**
     *@ORM\Column(type="string",name="metatitle",length=70,nullable=true)
     */
    private $metatitle;




    /**
     *@ORM\Column(type="string",name="heading",nullable=true)
     */
    private $heading;


    /**
     * @ORM\Column(type="string",name="metadescription",length=320,nullable=true)
     */
    private $metadescription;




    /**
     * @ORM\Column(type="string",name="metakeywords",nullable=true)
     */
    private $metakeywords;







    /**
     * @ORM\Column(type="text",name="content",nullable=true)
     */
    private $content;


    /**
     * @ORM\Column(type="string",name="thumbnailimagelink",nullable=true)
     */
    private $thumbnailimagelink;

    /**
     * @ORM\Column(type="string",name="fullimagelink",nullable=true)
     */
    private $fullimagelink;


    /**
     * @ORM\Column(type="string",name="mediumimagelink",nullable=true)
     */
    private $mediumimagelink;

    /**
     * @ORM\Column(type="datetime",name="timeadded")
     */
    private $timeadded;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ArticleCategory",inversedBy="articles")
     */
    private $category;

    /**
     * @ORM\Column(type="boolean",name="mainfooter1",options={"default"=true})
     */
    private $mainfooter1;

    /**
     * @ORM\Column(type="boolean",name="mainfooter2",options={"default"=true})
     */
    private $mainfooter2;

    private $file;
    private $file1;
    private $file2;

    /**
     * @ORM\Column(type="integer",options={"default"=0},nullable=true)
     */
    private $totalviews;


    /**
     * @Gedmo\Slug(fields={"heading"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;


    /**
     * @ORM\Column(type="string",length=16,name="navigation",nullable=true)
     */
    private $navigation;


    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",name="lastmodified",options={"default"=null},nullable=true)
     */
    private $lastmodified;


    /**
     * @ORM\Column(type="boolean",name="live")
     */
    private $live;



    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $tags;





    private $imageLocation;


    private $maintextwithimage;

    private $innerImage;

    private $image360;




    /**
     * Article constructor.
     */


    public function __construct()
    {
        $this->timeadded=new \DateTime();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMetadescription()
    {
        return $this->metadescription;
    }

    /**
     * @param mixed $metakeywords
     */
    public function setMetakeywords($metakeywords): void
    {
        $this->metakeywords = $metakeywords;
    }

    /**
     * @param mixed $metadescription
     */
    public function setMetadescription($metadescription): void
    {
        $this->metadescription = $metadescription;
    }





    /**
     * @return mixed
     */
    public function getMetakeywords()
    {
        return $this->metakeywords;
    }









    /**
     * @return mixed
     */
    public function getFullimagelink()
    {
        return $this->fullimagelink;
    }

    /**
     * @return mixed
     */
    public function getMediumimagelink()
    {
        return $this->mediumimagelink;
    }

    /**
     * @return mixed
     */
    public function getThumbnailimagelink()
    {
        return $this->thumbnailimagelink;
    }

    /**
     * @param mixed $fullimagelink
     */
    public function setFullimagelink($fullimagelink): void
    {
        $this->fullimagelink = $fullimagelink;
    }

    /**
     * @param mixed $mediumimagelink
     */
    public function setMediumimagelink($mediumimagelink): void
    {
        $this->mediumimagelink = $mediumimagelink;
    }

    /**
     * @param mixed $thumbnailimagelink
     */
    public function setThumbnailimagelink($thumbnailimagelink): void
    {
        $this->thumbnailimagelink = $thumbnailimagelink;
    }


    /**
     * @param mixed $file
     */
    public function setFile(UploadedFile $file=null): void
    {
        $this->file = $file;
    }

    /**
     * @param mixed $file1
     */
    public function setFile1(UploadedFile $file1=null): void
    {
        $this->file1 = $file1;
    }

    /**
     * @param mixed $file2
     */
    public function setFile2(UploadedFile $file2=null): void
    {
        $this->file2 = $file2;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return mixed
     */
    public function getFile1()
    {
        return $this->file1;
    }

    /**
     * @return mixed
     */
    public function getFile2()
    {
        return $this->file2;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getTimeadded()
    {
        return $this->timeadded;
    }

    /**
     * @param mixed $timeadded
     */
    public function setTimeadded($timeadded): void
    {
        $this->timeadded = $timeadded;
    }

    /**
     * @return mixed
     */
    public function getMainfooter1()
    {
        return $this->mainfooter1;
    }

    /**
     * @return mixed
     */
    public function getMainfooter2()
    {
        return $this->mainfooter2;
    }

    /**
     * @param mixed $mainfooter2
     */
    public function setMainfooter2($mainfooter2): void
    {
        $this->mainfooter2 = $mainfooter2;
    }

    /**
     * @param mixed $mainfooter1
     */
    public function setMainfooter1($mainfooter1): void
    {
        $this->mainfooter1 = $mainfooter1;
    }


    /**
     * @return mixed
     */
    public function getTotalviews()
    {
        return $this->totalviews;
    }


    /**
     * @param mixed $totalviews
     */
    public function setTotalviews(): void
    {
        $this->totalviews = $this->totalviews+1;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }


    /**
     * @return mixed
     */
    public function getImageLocation()
    {
        return $this->imageLocation;
    }


    /**
     * @param mixed $imageLocation
     */
    public function setImageLocation($imageLocation): void
    {
        $this->imageLocation = $imageLocation;
    }

    /**
     * @return mixed
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * @param mixed $navigation
     */
    public function setNavigation($navigation): void
    {
        $this->navigation = $navigation;
    }

    /**
     * @return mixed
     */
    public function getMaintextwithimage()
    {
        return $this->maintextwithimage;
    }


    /**
     * @param mixed $maintextwithimage
     */
    public function setMaintextwithimage($maintextwithimage): void
    {
        $this->maintextwithimage = $maintextwithimage;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getLastmodified()
    {
        return $this->lastmodified;
    }

    /**
     * @param mixed $lastmodified
     */
    public function setLastmodified($lastmodified): void
    {
        $this->lastmodified = $lastmodified;
    }

    public function getGmDate()
    {
        return gmdate("M d,y",strtotime($this->timeadded->format('Y-m-d H:i:s')));
    }



    public function getIntrotext()
    {
        return trim(substr(strip_tags($this->getContent()), 0, 90))."...";
    }

    /**
     * @return mixed
     */
    public function getInnerImage()
    {
        return $this->innerImage;
    }

    /**
     * @param mixed $innerImage
     */
    public function setInnerImage($innerImage): void
    {
        $this->innerImage = $innerImage;
    }

    /**
     * @return mixed
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * @param mixed $live
     */
    public function setLive($live): void
    {
        $this->live = $live;
    }



    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags): void
    {
        $this->tags = $tags;
    }


    /**
     * @return mixed
     */
    public function getMetatitle()
    {
        return $this->metatitle;
    }

    /**
     * @param mixed $metatitle
     */
    public function setMetatitle($metatitle): void
    {
        $this->metatitle = $metatitle;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @param mixed $heading
     */
    public function setHeading($heading): void
    {
        $this->heading = $heading;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getImage360()
    {
        return $this->image360;
    }

    /**
     * @param mixed $image360
     */
    public function setImage360($image360): void
    {
        $this->image360 = $image360;
    }













}
