<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\BankingRepository")
 */
class Banking
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=64,name="name")
     */
    private $name;

    /**
     * @ORM\Column(type="datetime",name="addedtime")
     */
    private $addedtime;

    /**
     * @ORM\Column(type="datetime",name="updatedtime")
     */
    private $updatedtime;

    /**
     * @ORM\Column(type="integer",name="totalcountdeposit")
     */
    private $totalcountdeposit;


    /**
     * @ORM\Column(type="integer",name="totalcountwithdrawals")
     */
    private $totalcountwithdrawals;

    /**
     * @ORM\Column(type="string",length=255,name="uploadedimagelink", nullable=true)
     */
    private $uploadedimagelink;


    /**
     * @ORM\Column(type="string",length=255,name="uploadedimagesmalllink",nullable=true)
     */
    private $uploadedimagesmalllink;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoBanking",mappedBy="banking" ,orphanRemoval=true)
     */
    private $casinos;


    /**
     * @ORM\Column(type="string" ,name="imgsrc", nullable=true)
     */
    private $imgsrc;


    /**
     * @ORM\Column(type="string",length=255,name="imageurl",nullable=true)
     */
    private $imageurl;

    /**
     * @ORM\Column(type="string",name="slug",length=64,nullable=true)
     */
    private $slug;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",name="lastmodified",options={"default"=null},nullable=true)
     */
    private $lastmodified;


    /**
     * @var
     */
    private $imageLocation;



    public function __construct($id = null)
    {
        if ($id) {
            $this->setId($id);
        }
        $this->casinos=new ArrayCollection();
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
    public function getId()
    {
        return $this->id;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAddedtime()
    {
        return $this->addedtime;
    }

    /**
     * @return mixed
     */
    public function getTotalcountdeposit()
    {
        return $this->totalcountdeposit;
    }

    /**
     * @return mixed
     */
    public function getTotalcountwithdrawals()
    {
        return $this->totalcountwithdrawals;
    }

    /**
     * @return mixed
     */
    public function getUpdatedtime()
    {
        return $this->updatedtime;
    }

    /**
     * @return mixed
     */
    public function getUploadedimagelink()
    {
        return $this->uploadedimagelink;
    }

    /**
     * @return mixed
     */
    public function getUploadedimagesmalllink()
    {
        return $this->uploadedimagesmalllink;
    }

    /**
     * @param mixed $addedtime
     */
    public function setAddedtime($addedtime): void
    {
        $this->addedtime = $addedtime;
    }

    /**
     * @param mixed $totalcountdeposit
     */
    public function setTotalcountdeposit($totalcountdeposit): void
    {
        $this->totalcountdeposit = $totalcountdeposit;
    }

    /**
     * @param mixed $totalcountwithdrawals
     */
    public function setTotalcountwithdrawals($totalcountwithdrawals): void
    {
        $this->totalcountwithdrawals = $totalcountwithdrawals;
    }

    /**
     * @param mixed $updatedtime
     */
    public function setUpdatedtime($updatedtime): void
    {
        $this->updatedtime = $updatedtime;
    }

    /**
     * @param mixed $uploadedimagelink
     */
    public function setUploadedimagelink($uploadedimagelink): void
    {
        $this->uploadedimagelink = $uploadedimagelink;
    }

    /**
     * @param mixed $uploadedimagesmalllink
     */
    public function setUploadedimagesmalllink($uploadedimagesmalllink): void
    {
        $this->uploadedimagesmalllink = $uploadedimagesmalllink;
    }

    /**
     * @return mixed
     */
    public function getCasinos()
    {
        return $this->casinos;
    }

    public function addBankingCasino(CasinoBanking $casinobanking)
    {
        $casinobanking->setBanking($this);


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
    public function getImageurl()
    {
        return $this->imageurl;
    }

    /**
     * @param mixed $imageurl
     */
    public function setImageurl($imageurl): void
    {
        $this->imageurl = $imageurl;
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






}