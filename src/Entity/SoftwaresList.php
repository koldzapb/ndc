<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SoftwaresListRepository")
 */
class SoftwaresList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string",length=32,name="softwarename")
     */
    private $softwarename;



    /**
     * @ORM\Column(type="string",length=32,name="anchorname",nullable=true)
     */
    private $anchorname;


    /**
     * @ORM\Column(type="string",length=32,name="slug")
     */
    private $slug;

    /**
     * @ORM\Column(type="string",length=70,name="metatitle",nullable=true)
     */
    private $metatitle;

    /**
     * @ORM\Column(type="string",length=320,name="metadescription",nullable=true)
     */
    private $metadescription;


    /**
     * @ORM\Column(type="string",length=255,name="metakeywords",nullable=true)
     */
    private $metakeywords;


    /**
     * @ORM\Column(type="text",name="content",nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="text",name="below_content",nullable=true)
     */
    private $belowcontent;




    /**
     * @var string
     * @ORM\Column(type="string",length=64, nullable=true)
     */
    private $heading;


    /**
     * @ORM\Column(type="boolean",name="mainfooter1",options={"default"=true})
     */
    private $mainfooter1;


    /**
     * @ORM\Column(type="boolean",name="mainfooter2",options={"default"=true})
     */
    private $mainfooter2;




    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Software",inversedBy="softwareslist")
     */
    private $software;


    /**
     * @ORM\Column(type="string",length=255,name="tags",nullable=true)
     */
    private $tags;

    /**
     * @ORM\Column(type="boolean",name="has_faqs",nullable=true)
     */
    private $hasFaqs;



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
    public function getSoftwarename()
    {
        return $this->softwarename;
    }

    /**
     * @param mixed $softwarename
     */
    public function setSoftwarename($softwarename): void
    {
        $this->softwarename = $softwarename;
    }


    /**
     * @return mixed
     */
    public function getAnchorname()
    {
        return $this->anchorname;
    }


    /**
     * @param mixed $anchorname
     */
    public function setAnchorname($anchorname): void
    {
        $this->anchorname = $anchorname;
    }

    /**
     * @return mixed
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * @param mixed $software
     */
    public function setSoftware($software): void
    {
        $this->software = $software;
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
    public function getMetadescription()
    {
        return $this->metadescription;
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
     * @param mixed $metakeywords
     */
    public function setMetakeywords($metakeywords): void
    {
        $this->metakeywords = $metakeywords;
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
    public function getMainfooter2()
    {
        return $this->mainfooter2;
    }

    /**
     * @return mixed
     */
    public function getMainfooter1()
    {
        return $this->mainfooter1;
    }

    /**
     * @param mixed $belowcontent
     */
    public function setBelowcontent($belowcontent): void
    {
        $this->belowcontent = $belowcontent;
    }

    /**
     * @return mixed
     */
    public function getBelowcontent()
    {
        return $this->belowcontent;
    }

    /**
     * @return string
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * @param string $heading
     */
    public function setHeading(string $heading): void
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
    public function getHasFaqs()
    {
        return $this->hasFaqs;
    }

    /**
     * @param mixed $hasFaqs
     */
    public function setHasFaqs($hasFaqs): void
    {
        $this->hasFaqs = $hasFaqs;
    }





}
