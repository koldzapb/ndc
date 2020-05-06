<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\LanguageRepository")
 */
class Language
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=10,name="countrycode")
     */
    private $countrycode;


    /**
     * @ORM\Column(type="string",length=64,name="name")
     */
    private $name;


    /**
     * @ORM\Column(type="datetime", name="addedtime")
     */
    private $addedtime;


    /**
     * @ORM\Column(type="datetime", name="updatedtime")
     */
    private $updatedtime;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino",inversedBy="languages")
     * @ORM\JoinTable(name="casino_language")
     */
    private $casinos;


    /**
     * @ORM\Column(type="string",name="img",length=64)
     */
    private $img;


    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",name="lastmodified",options={"default"=null},nullable=true)
     */
    private $lastmodified;


    /**
     * @ORM\Column(type="string",name="slug",nullable=true)
     */
    private $slug;



    private $imageLocation;


    /**
     * Language constructor.
     */
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
    public function getUpdatedTime()
    {
        return $this->updatedtime;
    }

    /**
     * @param mixed $updatedtime
     */
    public function setUpdatedTime($updatedtime): void
    {
        $this->updatedtime = $updatedtime;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countrycode;
    }

    /**
     * @param mixed $countrycode
     */
    public function setCountryCode($countrycode): void
    {
        $this->countrycode = $countrycode;
    }

    /**
     * @return mixed
     */
    public function getCasinos()
    {
        return $this->casinos;
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
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
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




}
