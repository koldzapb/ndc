<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\MainPageRepository")
 */
class MainPage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="code")
     */
    private $code;



    /**
     *@ORM\Column(type="string",length=200,name="metatitle")
     */
    private $metatitle;



    /**
     *@ORM\Column(type="string",name="heading")
     */
    private $heading;


    /**
     * @ORM\Column(type="string",length=320,name="metadescription")
     */
    private $metadescription;




    /**
     * @ORM\Column(type="string",name="metakeywords")
     */
    private $metakeywords;







    /**
     * @ORM\Column(type="text",name="content")
     */
    private $content;

    /**
     * @ORM\Column(type="string",name="bodyclass",nullable=true)
     */
    private $bodyclass;


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
     * @ORM\Column(type="string",length=64,nullable=true)
     */
    private $url;


    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $lastmodified;

    /**
     * @ORM\Column(type="string",name="slug",nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $tags;






    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
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
     * @param mixed $metadescription
     */
    public function setMetadescription($metadescription): void
    {
        $this->metadescription = $metadescription;
    }

    /**
     * @param mixed $metakeywords
     */
    public function setMetakeywords($metakeywords): void
    {
        $this->metakeywords = $metakeywords;
    }

    /**
     * @return mixed
     */
    public function getBodyclass()
    {
        return $this->bodyclass;
    }

    /**
     * @param mixed $bodyclass
     */
    public function setBodyclass($bodyclass): void
    {
        $this->bodyclass = $bodyclass;
    }

    /**
     * @return mixed
     */
    public function getMainfooter1()
    {
        return $this->mainfooter1;
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
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
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

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
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
    public function getShortcontent()
    {
        return substr(strip_tags($this->content),0,275);
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




}
