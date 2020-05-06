<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BonusTypeRepository")
 */
class BonusType
{
    /**
     * @ORM\Id

     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",name="name")
     */
    private $name;

    /**
     * @ORM\Column(type="integer",name="priority")
     */
    private $priority;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bonus",mappedBy="bonustype")
     */
    private $bonuses;





    /**
     * @ORM\Column(type="string",name="imgsrc",length=64,nullable=true)
     */
    private $imgsrc;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\BonusValue",mappedBy="bonustype")
     */
    private $bonusvaluepages;


    private $imagefile;


    private $imagelocation;




    /**
     * BonusType constructor.
     */
    public function __construct($id = null)
    {
        if ($id) {
            $this->setId($id);
        }
        $this->bonuses=new ArrayCollection();
        $this->bonusvaluepages=new ArrayCollection();
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
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getBonuses()
    {
        return $this->bonuses;
    }

    public function addBonus(Bonus $bonus)
    {

        if(!$this->bonuses->contains($bonus)){
            $this->bonuses->add($bonus);
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
    public function getImagefile()
    {
        return $this->imagefile;
    }


    /**
     * @param mixed $imagefile
     */
    public function setImagefile($imagefile): void
    {
        $this->imagefile = $imagefile;
    }


    /**
     * @return mixed
     */
    public function getImagelocation()
    {
        return $this->imagelocation;
    }


    /**
     * @param mixed $imagelocation
     */
    public function setImagelocation($imagelocation): void
    {
        $this->imagelocation = $imagelocation;
    }

    /**
     * @return mixed
     */
    public function getBonusvaluepages()
    {
        return $this->bonusvaluepages;
    }

    public function addBonusValuePage(BonusValue $bonusValue)
    {
        if(!$this->bonusvaluepages->contains($bonusValue))
        {
            $this->bonusvaluepages->add($bonusValue);
        }
    }



}
