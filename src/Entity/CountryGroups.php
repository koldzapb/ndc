<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryGroupsRepository")
 */
class CountryGroups
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
     * @ORM\OneToMany(targetEntity="App\Entity\Country",mappedBy="group")
     */
    private $countries;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino",mappedBy="group")
     */
    private $casinos;


    public function __construct($id = null)
    {
        if ($id) {
            $this->setId($id);
        }
        $this->countries=new ArrayCollection();
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
    public function getCountries()
    {
        return $this->countries;
    }

    public function addCountry(Country $country)
    {
        if(!($this->countries->contains($country)))
        {
            $this->countries->add($country);
        }
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
        if(!($this->casinos->contains($casino)))
        {
            $this->casinos->add($casino);
        }
    }



}
