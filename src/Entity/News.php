<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\NewsRepository")
 */
class News
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
     * @ORM\Column(type="string",name="fullimagelink",nullable=true)
     */
    private $fullimagelink;


    /**
     * @ORM\Column(type="string",name="innerimage",nullable=true)
     */
    private $innerimage;




    /**
     * @ORM\Column(type="datetime",name="timeadded")
     */
    private $timeadded;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ArticleCategory",inversedBy="news")
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Author",inversedBy="news")
     */
    private $author;



    private $coverImageLocation;



    private $file;

    private $file1;

    private $imageLocation;

    private $mainTextWithImage;

    private $image360;





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
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * @return mixed
     */
    public function getTotalviews()
    {
        return $this->totalviews;
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
    public function getFullimagelink()
    {
        return $this->fullimagelink;
    }

    /**
     * @param mixed $fullimagelink
     */
    public function setFullimagelink($fullimagelink): void
    {
        $this->fullimagelink = $fullimagelink;
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
     * @return mixed
     */
    public function getMetadescription()
    {
        return $this->metadescription;
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
    public function getTimeadded()
    {
        return $this->timeadded;
    }




    /**
     * @param mixed $file
     */
    public function setFile($file): void
    {
        $this->file = $file;
    }



    /**
     * @param mixed $mainfooter1
     */
    public function setMainfooter1($mainfooter1): void
    {
        $this->mainfooter1 = $mainfooter1;
    }


    /**
     * @param mixed $mainfooter2
     */
    public function setMainfooter2($mainfooter2): void
    {
        $this->mainfooter2 = $mainfooter2;
    }



    /**
     * @param mixed $metakeywords
     */
    public function setMetakeywords($metakeywords): void
    {
        $this->metakeywords = $metakeywords;
    }

    /**
     * @param mixed $totalviews
     */
    public function setTotalviews($totalviews): void
    {
        $this->totalviews = $totalviews;
    }





    /**
     * @param mixed $metadescription
     */
    public function setMetadescription($metadescription): void
    {
        $this->metadescription = $metadescription;
    }

    /**
     * @param mixed $timeadded
     */
    public function setTimeadded($timeadded): void
    {
        $this->timeadded = $timeadded;
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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getFile1()
    {
        return $this->file1;
    }


    /**
     * @param mixed $file1
     */
    public function setFile1($file1): void
    {
        $this->file1 = $file1;
    }

    /**
     * @return mixed
     */
    public function getInnerimage()
    {
        return $this->innerimage;
    }


    /**
     * @param mixed $innerimage
     */
    public function setInnerimage($innerimage): void
    {
        $this->innerimage = $innerimage;
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

    public function getIntrotext()
    {
        return trim(substr(strip_tags($this->getContent()), 0, 90))."...";
    }


    /**
     * @return mixed
     */
    public function getMainTextWithImage()
    {
        return $this->mainTextWithImage;
    }

    /**
     * @param mixed $mainTextWithImage
     */
    public function setMainTextWithImage($mainTextWithImage): void
    {
        $this->mainTextWithImage = $mainTextWithImage;
    }

    /**
     * @return mixed
     */
    public function getNavigation()
    {
        return $this->navigation;
    }


    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
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
        return gmdate("M d,y H:m",strtotime($this->timeadded->format("M d,y H:m")));
    }

    /**
     * @return mixed
     */
    public function getCoverImageLocation()
    {
        return $this->coverImageLocation;
    }

    /**
     * @param mixed $coverImageLocation
     */
    public function setCoverImageLocation($coverImageLocation): void
    {
        $this->coverImageLocation = $coverImageLocation;
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
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @param mixed $heading
     */
    public function setHeading($heading): void
    {
        $this->heading = $heading;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return $this->heading;
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
    public function getMetatitle()
    {
        return $this->metatitle;
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

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }










}
