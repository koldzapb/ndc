<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string",length=10,name="countrycode",nullable=true)
     */
    private $countrycode;
    /**
     * @ORM\Column(type="integer", name="countryid",nullable=true)
     */
    private $countryid;
    /**
     * @ORM\Column(type="integer", name="continentid",nullable=true)
     */
    private $continentid;
    /**
     * @ORM\Column(type="string",length=64, name="name",)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean",name="hidden",options={"default"=false})
     */
    private $hidden;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\CountryList", mappedBy="referencedcountry")
     */
    private $countrylist;





    /**
     * @ORM\Column(type="string",length=255, name="lat",nullable=true)
     */
    private $lat;
    /**
     * @ORM\Column(type="string",length=255, name="lng",nullable=true)
     */
    private $lng;

    /**
     * @ORM\Column(type="string",length=64, name="citizens",nullable=true)
     */
    private $citizens;

    /**
     * @ORM\Column(type="datetime" ,name="dateadded")
     */
    private $dateadded;

    /**
     * @ORM\Column(type="datetime" ,name="dateupdated")
     */
    private $dateupdated;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino",mappedBy="countries")
     */
    private $casinos;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Bonus",mappedBy="restrictedcountries",cascade={"persist"})
     */
    private $bonuses;



    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Software",inversedBy="restrictedcountries",cascade={"persist"})
     * @ORM\JoinTable(name="softwarerestrictedcountries")
     */
    private $restrictedsoftware;


    /**
     *@ORM\ManyToOne(targetEntity="App\Entity\CountryGroups",inversedBy="countries")
     */
    private $group;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Casino", inversedBy="countriesWithJurisdictions")
     * @ORM\JoinTable(name="casinos_jurisdictions")
     */
    private $casinosHaveJurisdiction;

    /**
     * @ORM\Column(type="smallint",name="jurisdiction_check",options={"default"=0})
     */
    private $jurisdictionCheck;

    private $imgSrc;

    private $childCountry;






    /**
     * Country Constructor
     */
    public function __construct()
    {
        $this->casinos=new ArrayCollection();
        $this->bonuses=new ArrayCollection();
        $this->restrictedsoftware=new ArrayCollection();
        $this->casinosHaveJurisdiction=new ArrayCollection();
    }


    /**
     * @param mixed $hidden
     */
    public function setHidden($hidden): void
    {
        $this->hidden = $hidden;
    }

    /**
     * @return mixed
     */
    public function getHidden()
    {
        return $this->hidden;
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
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat): void
    {
        $this->lat = $lat;
    }

    /**
     * @return mixed
     */
    public function getCitizens()
    {
        return $this->citizens;
    }

    /**
     * @param mixed $citizens
     */
    public function setCitizens($citizens): void
    {
        $this->citizens = $citizens;
    }

    /**
     * @return mixed
     */
    public function getDateAdded()
    {
        return $this->dateadded;
    }

    /**
     * @param mixed $dateadded
     */
    public function setDateAdded($dateadded): void
    {
        $this->dateadded = $dateadded;
    }

    /**
     * @return mixed
     */
    public function getDateUpdated()
    {
        return $this->dateupdated;
    }

    /**
     * @param mixed $dateupdated
     */
    public function setDateUpdated($dateupdated): void
    {
        $this->dateupdated = $dateupdated;
    }

    /**
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param mixed $lng
     */
    public function setLng($lng): void
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getContinentId()
    {
        return $this->continentid;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->countryid;
    }

    /**
     * @param mixed $continentid
     */
    public function setContinentId($continentid): void
    {
        $this->continentid = $continentid;
    }

    /**
     * @param mixed $countryid
     */
    public function setCountryId($countryid): void
    {
        $this->countryid = $countryid;
    }

    /**
     * @return mixed
     */
    public function getCasinos()
    {
        return $this->casinos;
    }

    public function addCasino(Casino $casino){
        if(!$this->casinos->contains($casino))
        {
            $this->casinos->add($casino);
        }
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
        if(!$this->bonuses->contains($bonus))
        {
            $this->bonuses->add($bonus);
        }
    }

    /**
     * @return mixed
     */
    public function getRestrictedsoftware()
    {
        return $this->restrictedsoftware;
    }
    public function addRestrictedSoftware(Software $software)
    {
        if(!$this->restrictedsoftware->contains($software))
        {
            $this->restrictedsoftware->add($software);
        }
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup(CountryGroups $group): void
    {
        $this->group = $group;
    }



    /**
     * @return mixed
     */
    public function getCountrylist()
    {
        return $this->countrylist;
    }

    /**
     * @param mixed $countrylist
     */
    public function setCountrylist($countrylist): void
    {
        $this->countrylist = $countrylist;
    }

    /**
     * @return mixed
     */
    public function getCasinosHaveJurisdiction()
    {
        return $this->casinosHaveJurisdiction;
    }

    public function addCasinoHaveJurisdiction(Casino $casino)
    {
        if(!$this->casinosHaveJurisdiction->contains($casino)){
            $this->casinosHaveJurisdiction->add($casino);
        }
    }

    /**
     * @return mixed
     */
    public function getJurisdictionCheck()
    {
        return $this->jurisdictionCheck;
    }

    /**
     * @param mixed $jurisdictionCheck
     */
    public function setJurisdictionCheck($jurisdictionCheck): void
    {
        $this->jurisdictionCheck = $jurisdictionCheck;
    }

    /**
     * @return mixed
     */
    public function getImgSrc()
    {
        return $this->imgSrc;
    }

    /**
     * @param mixed $imgSrc
     */
    public function setImgSrc($imgSrc): void
    {
        $this->imgSrc = $imgSrc;
    }

    /**
     * @return mixed
     */
    public function getChildCountry()
    {
        return $this->childCountry;
    }

    /**
     * @param mixed $childCountry
     */
    public function setChildCountry(Country $childCountry): void
    {
        $this->childCountry = $childCountry;
    }







}
