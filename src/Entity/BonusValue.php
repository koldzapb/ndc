<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\BonusValueRepository")
 */
class BonusValue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=70,name="metatitle")
     */
    private $metatitle;

    /**
     * @ORM\Column(type="string",length=320,name="metadescription")
     */
    private $metadescription;


    /**
     * @ORM\Column(type="string",name="metakeywords")
     */
    private $metakeywords;


    /**
     * @ORM\Column(type="string",name="heading")
     */
    private $heading;


    /**
     * @ORM\Column(type="string",length=255,name="tags",nullable=true)
     */
    private $tags;






    /**
     * @ORM\Column(type="text",name="content",nullable=true)
     */
    private $content;


    /**
     * @ORM\Column(type="text",name="below_content",nullable=true)
     */
    private $belowcontent;


    /**
     * @ORM\Column(type="boolean",name="mainfooter1",options={"default"=true})
     */
    private $mainfooter1;


    /**
     * @ORM\Column(type="boolean",name="mainfooter2",options={"default"=true})
     */
    private $mainfooter2;


    /**
     * @ORM\Column(type="integer")
     */
    private $value;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $upperValue;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $symbol;



    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $timeAdded;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $timeUpdated;


    /**
     * @ORM\Column(type="string",length=64)
     */
    private $slug;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\BonusType",inversedBy="bonusvaluepages")
     */
    private $bonustype;

    public function getId()
    {
        return $this->id;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getTimeAdded(): ?\DateTimeInterface
    {
        return $this->timeAdded;
    }

    public function setTimeAdded(\DateTimeInterface $timeAdded): self
    {
        $this->timeAdded = $timeAdded;

        return $this;
    }

    public function getTimeUpdated(): ?\DateTimeInterface
    {
        return $this->timeUpdated;
    }

    public function setTimeUpdated(\DateTimeInterface $timeUpdated): self
    {
        $this->timeUpdated = $timeUpdated;

        return $this;
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
    public function getBonustype()
    {
        return $this->bonustype;
    }

    /**
     * @param mixed $bonustype
     */
    public function setBonustype($bonustype): void
    {
        $this->bonustype = $bonustype;
    }

    /**
     * @return mixed
     */
    public function getUpperValue()
    {
        return $this->upperValue;
    }

    /**
     * @param mixed $upperValue
     */
    public function setUpperValue($upperValue): void
    {
        $this->upperValue = $upperValue;
    }

    /**
     * @return mixed
     */
    public function getBelowcontent()
    {
        return $this->belowcontent;
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
     * @return mixed
     */
    public function getMetadescription()
    {
        return $this->metadescription;
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




}
