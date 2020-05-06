<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CurrencyRepository")
 */
class Currency
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=10,name="currencycode")
     */
    private $currencycode;

    /**
     * @ORM\Column(type="string",length=64,name="name")
     */
    private $name;

    /**
     * @ORM\Column(type="datetime", name="addedtime")
     */
    private $addedtime;



    /**
     * @ORM\Column(type="datetime", name="uploadedtime")
     */
    private $uploadedtime;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino",inversedBy="currencies")
     * @ORM\JoinTable(name="casinocurrency")
     */
    private $casinos;

    /**
     * @ORM\Column(type="string",name="imgsrc")
     */
    private $imgsrc;


    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",name="lastmodified",options={"default"=null},nullable=true)
     */
    private $lastmodified;


    /**
     * @ORM\Column(type="string",name="slug",nullable=true)
     */
    private $slug;


    /**
     * @ORM\Column(type="string",name="heading",nullable=true)
     */
    private $heading;



    private $imageLocation;



    public function __construct($id = null)
    {
        if ($id) {
            $this->setId($id);
        }
        $this->casinos=new ArrayCollection();
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
    public function getCurrencyCode()
    {
        return $this->currencycode;
    }

    /**
     * @param mixed $currencycode
     */
    public function setCurrencyCode($currencycode): void
    {
        $this->currencycode = $currencycode;
    }

    /**
     * @return mixed
     */
    public function getAddedTime()
    {
        return $this->addedtime;
    }

    /**
     * @param mixed $addedtime
     */
    public function setAddedTime($addedtime): void
    {
        $this->addedtime = $addedtime;
    }

    /**
     * @return mixed
     */
    public function getUploadedTime()
    {
        return $this->uploadedtime;
    }

    /**
     * @param mixed $uploadedtime
     */
    public function setUploadedTime($uploadedtime): void
    {
        $this->uploadedtime = $uploadedtime;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCasinos()
    {
        return $this->casinos;
    }

    public function addCasino(Casino $casino)
    {
        if(!$this->casinos->contains($casino))
        {
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
    public function getLastmodified()
    {
        return $this->lastmodified;
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


}
