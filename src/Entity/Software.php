<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SoftwareRepository")
 */
class Software
{
    /**
     * @ORM\Id

     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string" , length=128 , name="title")
     */
    private $title;


    /**
     * @ORM\Column(type="string" , length=128 , name="pageurl")
     */
    private $pageurl;


    /**
     * @ORM\Column(type="integer"  , name="totallinkedcasinos")
     */
    private $totallinkedcasinos;


    /**
     * @ORM\Column(type="datetime"  , name="timeadded")
     */
    private $timeaded;


    /**
     * @ORM\Column(type="datetime"  , name="timeupdated")
     */
    private $timeupdated;


    /**
     * @ORM\Column(type="string" , length=255 , name="imagelink", nullable=true)
     */
    private $imagelink;


    /**
     * @ORM\Column(type="string" , length=255 , name="Uploadedimagelink", nullable=true)
     */
    private $uploadedimagelink;

    /**
     * @ORM\Column(type="string",name="imgsrc",nullable=true)
     */
    private $imgsrc;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino" , inversedBy="softwares")
     * @ORM\JoinTable(name="casinosoftware")
     */
    private $casinos;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Country",mappedBy="restrictedsoftware")
     */
    private $restrictedcountries;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\SoftwaresList",mappedBy="software")
     */
    private $softwareslist;


    /**
     * @var boolean
     */
    private $availableInCountry;

    private $softwarelogo;

    private $image25;






    public function __construct()
    {
        $this->casinos=new ArrayCollection();
        $this->restrictedcountries=new ArrayCollection();
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
    public function getTimeUpdated()
    {
        return $this->timeupdated;
    }

    /**
     * @param mixed $timeupdated
     */
    public function setTimeUpdated($timeupdated): void
    {
        $this->timeupdated = $timeupdated;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getCasinos()
    {
        return $this->casinos;
    }

    /**
     * @param mixed $casinos
     */
    public function setCasinos($casinos): void
    {
        $this->casinos = $casinos;
    }

    /**
     * @return mixed
     */
    public function getImageLink()
    {
        return $this->imagelink;
    }

    /**
     * @param mixed $imagelink
     */
    public function setImageLink($imagelink): void
    {
        $this->imagelink = $imagelink;
    }

    /**
     * @return mixed
     */
    public function getTimeAded()
    {
        return $this->timeaded;
    }


    /**
     * @param mixed $timeaded
     */
    public function setTimeAded($timeaded): void
    {
        $this->timeaded = $timeaded;
    }


    /**
     * @return mixed
     */
    public function getPageUrl()
    {
        return $this->pageurl;
    }


    /**
     * @param mixed $pageurl
     */
    public function setPageUrl($pageurl): void
    {
        $this->pageurl = $pageurl;
    }


    /**
     * @return mixed
     */
    public function getTotalLinkedCasinos()
    {
        return $this->totallinkedcasinos;
    }

    /**
     * @param mixed $totallinkedcasinos
     */
    public function setTotalLinkedCasinos($totallinkedcasinos): void
    {
        $this->totallinkedcasinos = $totallinkedcasinos;
    }


    /**
     * @return mixed
     */
    public function getUploadedImageLink()
    {
        return $this->uploadedimagelink;
    }


    /**
     * @param mixed $uploadedimagelink
     */
    public function setUploadedImageLink($uploadedimagelink): void
    {
        $this->uploadedimagelink = $uploadedimagelink;
    }


    public function addCasino(Casino $casino): void
    {

        if (!$this->casinos->contains($casino)) {
            $this->casinos->add($casino);
        }
    }

    /**
     * @return mixed
     */
    public function getImgsrc()
    {
        return $this->imgsrc;
    }


    /**
     * @param mixed $imgsrc
     */
    public function setImgsrc($imgsrc): void
    {
        $this->imgsrc = $imgsrc;
    }

    public function  addRestrictedCountry(Country $country)
    {
        if(!$this->restrictedcountries->contains($country))
        {
            $this->restrictedcountries->add($country);
        }
    }

    /**
     * @return mixed
     */
    public function getRestrictedcountries()
    {
        return $this->restrictedcountries;
    }

    /**
     * @param bool $availableInCountry
     */
    public function setAvailableInCountry(bool $availableInCountry): void
    {
        $this->availableInCountry = $availableInCountry;
    }

    /**
     * @return bool
     */
    public function isAvailableInCountry(): bool
    {
        return $this->availableInCountry;
    }

    /**
     * @return mixed
     */
    public function getSoftwarelogo()
    {
        return $this->softwarelogo;
    }

    /**
     * @param mixed $softwarelogo
     */
    public function setSoftwarelogo($softwarelogo): void
    {
        $this->softwarelogo = $softwarelogo;
    }

    /**
     * @return mixed
     */
    public function getSoftwareslist()
    {
        return $this->softwareslist;
    }

    /**
     * @param mixed $softwareslist
     */
    public function setSoftwareslist($softwareslist): void
    {
        $this->softwareslist = $softwareslist;
    }

    /**
     * @return mixed
     */
    public function getImage25()
    {
        return $this->image25;
    }

    /**
     * @param mixed $image25
     */
    public function setImage25($image25): void
    {
        $this->image25 = $image25;
    }














}
