<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CasinoRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false, hardDelete=true)
 */
class Casino
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer",name="id")
     *
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=100, name="casinoname")
     */
    private $casinoname;


    /**
     * @ORM\Column(type="text",name="casinourl")
     */
    private $casinourl;

    /**
     * @ORM\Column(type="integer" , name="usallowed")
     */
    private $usallowed;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Screenshot",mappedBy="casino",cascade={"persist"})
     */
    private $screenshots;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Software" , mappedBy="casinos")
     */
    private $softwares;

    /**
     * @ORM\Column(type="integer",name="newid")
     */
    private $newid;





    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Language",mappedBy="casinos")
     */
    private $languages;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Currency",mappedBy="casinos")
     */
    private $currencies;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Country",inversedBy="casinos")
     * @ORM\JoinTable(name="restrictedcountries")

     */
    private $countries;




    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bonus",mappedBy="casino")
     */
    private $bonuses;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoBanking",mappedBy="casino")
     */
    private $bankingoptions;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoAndBonusLikesAndPosts" ,mappedBy="casinoLiked",fetch="LAZY")
     */
    private $likes;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoAndBonusLikesAndPosts" , mappedBy="postToCasino",fetch="LAZY")
     */
    private $posts;








    /**
     * @var boolean
     */
    private $availableInCountry;

    /**
     * @ORM\Column(type="boolean",name="closed")
     */
    private $closed;


    /**
     * @ORM\Column(type="boolean",name="blacklisted")
     */
    private $blacklisted;
    /**
     * @ORM\Column(type="float",name="averagerating")
     */
    private $averagerating;

    /**
     * @ORM\Column(type="string", name="casinologo", nullable=true)
     */
    private $casinologo;

    /**
     * @ORM\Column(type="string",name="casinologourl", nullable=true)
     */
    private $casinologourl;

    /**
     * @ORM\Column(type="string", name="parsedlcbimage",nullable=true)
     */
    private $parsedlcbimage;





    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User",mappedBy="casinos")
     */
    private $users;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Author",inversedBy="casinoreviews")
     */
    private $reviewtextauthor;



    /**
     * @ORM\Column(type="integer",name="awardrank",nullable=true)
     */
    private $awardrank;


    /**
     * @ORM\Column(type="text",name="reviewtext",nullable=true)
     */
    private $reviewtext;


    /**
     * @ORM\Column(type="boolean",name="nodepositoftheweek")
     */
    private $nodepositoftheweek = false;

    /**
     * @var boolean
     */
    private $nodeposit;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\CountryGroups",inversedBy="casinos")
     * @ORM\JoinTable(name="topcasinos_regions")
     */
    private $group;

    /**
     * @ORM\Column(type="string",length=255,name="bannerlink",nullable=true)
     */
    private $bannerlink;


    /**
     * @ORM\Column(type="string",length=255,name="casinologoimage",nullable=true)
     */
    private $casinologoimage;

    /**
     * @ORM\Column(type="smallint",name="hidden",nullable=true,options={"default"=0})
     */
    private $hidden;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime",name="lastmodified",nullable=true)
     */
    private $lastmodified;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Country",mappedBy="casinosHaveJurisdiction")
     */
    private $countriesWithJurisdictions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\NoDepositBonusCodes",mappedBy="casino")
     */
    private $noDepositCodes;


    private $showBasedOnCountryJurisdiction;









    private $casinosoftwaresforcountrylisthover;


    private $logoLocation;

    private $logo35;

    private $logo50;

    private $logo90;

    private $logo105;




    /**
     * @ORM\Column(name="deletedAt", type="datetime", nullable=true)
     */
    private $deletedAt;


    /**
     * @var boolean
     */
    private $likedbyuser;


    /**
     * @ORM\Column(type="string",name="slug",nullable=true)
     */
    private $slug;


    /**
     * @ORM\Column(type="string",length=256,name="metadescription",nullable=true)
     */
    private $metadescription;


    /**
     * @ORM\Column(type="string",length=320,name="metakeywords",nullable=true)
     */
    private $metakeywords;

    /**
     * @ORM\Column(type="string",length=70,name="title",nullable=true)
     */
    private $title;


    /**
     * @ORM\Column(type="string",name="customurl",nullable=true)
     */
    private $customurl;

    /**
     * @ORM\Column(type="boolean",name="dont_show_factual_information",options={"default"=0})
     */
    private $dontShowFactualInformation;




    /**
     * Casino constructor.
     * @param null $id
     */
    public function __construct($id = null)
    {
        $this->screenshots=new ArrayCollection();
        $this->softwares=new ArrayCollection();
        $this->bankingoptions=new ArrayCollection();
        $this->languages=new ArrayCollection();
        $this->currencies=new ArrayCollection();
        $this->countries=new ArrayCollection();
        $this->bonuses=new ArrayCollection();
        $this->users=new ArrayCollection();
        $this->group=new ArrayCollection();
        $this->countriesWithJurisdictions=new ArrayCollection();
        if ($id) {
            $this->setId($id);
        }
        $this->likes=new ArrayCollection();
        $this->posts=new ArrayCollection();
        $this->noDepositCodes=new ArrayCollection();
    }

    /**
     * @return bool
     */
    public function isAvailableInCountry()
    {
        return $this->availableInCountry;
    }

    /**
     * @param bool $availableInCountry
     */
    public function setAvailableInCountry($availableInCountry)
    {
        $this->availableInCountry = $availableInCountry;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCasinoname()
    {
        return $this->casinoname;
    }

    /**
     * @param mixed $casinoname
     */
    public function setCasinoName($casinoname): void
    {
        $this->casinoname = $casinoname;
    }


    /**
     * @return mixed
     */
    public function getCasinoUrl()
    {
        return $this->casinourl;
    }

    /**
     * @param mixed $casinourl
     */
    public function setCasinoUrl($casinourl): void
    {
        $this->casinourl = $casinourl;
    }

    /**
     * @return Collection
     */
    public function getSoftwares()
    {
        return $this->softwares;
    }

    /**
     * @return mixed
     */
    public function getScreenshots()
    {
        return $this->screenshots;
    }


    /**
     * @return mixed
     */
    public function getUsallowed()
    {
        return $this->usallowed;
    }

    /**
     * @param mixed $usallowed
     */
    public function setUsallowed($usallowed): void
    {
        $this->usallowed = $usallowed;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function addScreenshoot(Screenshot $screenshot): void
    {

        if (!$this->screenshots->contains($screenshot)) {
            $screenshot->setCasino($this);
            //$this->screenshots->add($screenshot);
        }
    }
    public function addSoftware(Software $software): void
    {

        if (!$this->softwares->contains($software)) {
            $this->softwares->add($software);
        }
    }

    /**
     * @param mixed $newid
     */
    public function setNewId($newid): void
    {
        $this->newid = $newid;
    }

    /**
     * @return mixed
     */
    public function getNewId()
    {
        return $this->newid;
    }

    /**
     * @return mixed
     */




    /**
     * @return Collection
     */
    public function getBankingOptions()
    {
        return $this->bankingoptions;
    }

    /**
     * @return Collection
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    public function addLanguage(Language $language): void
    {

        if (!$this->languages->contains($language)) {
            $this->languages->add($language);
        }
    }

    /**
     * @return Collection
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }


    public function addCurrency(Currency $currency): void
    {

        if (!$this->currencies->contains($currency)) {
            $this->currencies->add($currency);
        }
    }



    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->countries;
    }
    public function addCountry(Country $country): void
    {

        if (!$this->countries->contains($country)) {
            $this->countries->add($country);
        }
    }














    /**
     * @return mixed
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * @param mixed $closed
     */
    public function setClosed($closed): void
    {
        $this->closed = $closed;
    }

    /**
     * @return mixed
     */
    public function getBlacklisted()
    {
        return $this->blacklisted;
    }

    /**
     * @param mixed $blacklisted
     */
    public function setBlacklisted($blacklisted): void
    {
        $this->blacklisted = $blacklisted;
    }

    /**
     * @return mixed
     */
    public function getAveragerating()
    {
        return $this->averagerating;
    }

    /**
     * @param mixed $averagerating
     */
    public function setAveragerating($averagerating): void
    {
        $this->averagerating = $averagerating;
    }

    /**
     * @return mixed
     */
    public function getCasinologo()
    {
        return $this->casinologo;
    }

    /**
     * @param mixed $casinologo
     */
    public function setCasinologo($casinologo): void
    {
        $this->casinologo = $casinologo;
    }

    /**
     * @return mixed
     */
    public function getCasinologourl()
    {
        return $this->casinologourl;
    }

    /**
     * @param mixed $casinologourl
     */
    public function setCasinologourl($casinologourl): void
    {
        $this->casinologourl = $casinologourl;
    }


    /**
     * @return mixed
     */
    public function getParsedlcbimage()
    {
        return $this->parsedlcbimage;
    }

    /**
     * @param mixed $parsedlcbimage
     */
    public function setParsedlcbimage($parsedlcbimage): void
    {
        $this->parsedlcbimage = $parsedlcbimage;
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
        $bonus->setCasino($this);
        if(!$this->bonuses->contains($bonus))
        {
            $this->bonuses->add($bonus);
        }
    }





    public function addUser(User $user)
    {
        if(!$this->users->contains($user))
        {
            $this->users->add($user);
            return true;
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @return mixed
     */
    public function getReviewtext()
    {
        return $this->reviewtext;
    }

    /**
     * @param mixed $reviewtext
     */
    public function setReviewtext($reviewtext): void
    {
        $this->reviewtext = $reviewtext;
    }

    /**
     * @param mixed $awardrank
     */
    public function setAwardrank($awardrank): void
    {
        $this->awardrank = $awardrank;
    }

    /**
     * @return mixed
     */
    public function getAwardrank()
    {
        return $this->awardrank;
    }

    /**
     * @return mixed
     */
    public function getNodepositoftheweek()
    {
        return $this->nodepositoftheweek;
    }

    /**
     * @param mixed $nodepositoftheweek
     */
    public function setNodepositoftheweek($nodepositoftheweek): void
    {
        $this->nodepositoftheweek = $nodepositoftheweek;
    }

    /**
     * @param bool $nodeposit
     */
    public function setNodeposit(bool $nodeposit): void
    {
        $this->nodeposit = $nodeposit;
    }

    /**
     * @return bool
     */
    public function isNodeposit(): bool
    {
        return $this->nodeposit;
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
    public function addGroup(CountryGroups $group): void
    {
        if(!$this->group->contains($group))
        {
            $this->group->add($group);
        }
    }

    /**
     * @return mixed
     */
    public function getBannerlink()
    {
        return $this->bannerlink;
    }


    /**
     * @param mixed $bannerlink
     */
    public function setBannerlink($bannerlink): void
    {
        $this->bannerlink = $bannerlink;
    }

    /**
     * @return mixed
     */
    public function getCasinosoftwaresforcountrylisthover()
    {
        return $this->casinosoftwaresforcountrylisthover;
    }

    /**
     * @return mixed
     */
    public function getLogoLocation()
    {
        return $this->logoLocation;
    }

    /**
     * @param mixed $logoLocation
     */
    public function setLogoLocation($logoLocation): void
    {
        $this->logoLocation = $logoLocation;
    }

    /**
     * @return mixed
     */
    public function getCasinologoimage()
    {
        return $this->casinologoimage;
    }

    /**
     * @param mixed $casinologoimage
     */
    public function setCasinologoimage($casinologoimage): void
    {
        $this->casinologoimage = $casinologoimage;
    }


    /**
     * @return bool
     */
    public function isLikedbyuser()
    {
        return $this->likedbyuser;
    }


    /**
     * @param bool $likedbyuser
     */
    public function setLikedbyuser(bool $likedbyuser): void
    {
        $this->likedbyuser = $likedbyuser;
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
     * @return mixed
     */
    public function getReviewtextauthor()
    {
        return $this->reviewtextauthor;
    }


    /**
     * @param mixed $reviewtextauthor
     */
    public function setReviewtextauthor($reviewtextauthor): void
    {
        $this->reviewtextauthor = $reviewtextauthor;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
    public function getFullcasinoname()
    {
        if($this->closed==1)
        {
            $this->casinoname.="-Closed";
        }
        if($this->blacklisted==1)
        {
            $this->casinoname.="-Blacklisted";
        }
        return $this->casinoname;
    }

    public function getRatingpercent()
    {
        return round($this->averagerating)/5 * 100;
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
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param mixed $deletedAt
     */
    public function setDeletedAt($deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return mixed
     */
    public function getCustomurl()
    {
        return $this->customurl;
    }

    /**
     * @param mixed $customurl
     */
    public function setCustomurl($customurl): void
    {
        $this->customurl = $customurl;
    }




    public function clearCountries()
    {
        $this->countries->clear();
    }

    /**
     * @return mixed
     */
    public function getLogo35()
    {
        return $this->logo35;
    }

    /**
     * @return mixed
     */
    public function getLogo50()
    {
        return $this->logo50;
    }

    /**
     * @return mixed
     */
    public function getLogo90()
    {
        return $this->logo90;
    }

    /**
     * @return mixed
     */
    public function getLogo105()
    {
        return $this->logo105;
    }

    /**
     * @param mixed $logo35
     */
    public function setLogo35($logo35): void
    {
        $this->logo35 = $logo35;
    }

    /**
     * @param mixed $logo50
     */
    public function setLogo50($logo50): void
    {
        $this->logo50 = $logo50;
    }

    /**
     * @param mixed $logo90
     */
    public function setLogo90($logo90): void
    {
        $this->logo90 = $logo90;
    }

    /**
     * @param mixed $logo105
     */
    public function setLogo105($logo105): void
    {
        $this->logo105 = $logo105;
    }

    /**
     * @return mixed
     */
    public function getCountriesWithJurisdictions()
    {
        return $this->countriesWithJurisdictions;
    }

    public function addCountryWithJurisdiction(Country $country)
    {
        if(!$this->countriesWithJurisdictions->contains($country)){
            $this->countriesWithJurisdictions->add($country);
        }
    }

    /**
     * @return mixed
     */
    public function getShowBasedOnCountryJurisdiction()
    {
        return $this->showBasedOnCountryJurisdiction;
    }

    /**
     * @param mixed $showBasedOnCountryJurisdiction
     */
    public function setShowBasedOnCountryJurisdiction($showBasedOnCountryJurisdiction): void
    {
        $this->showBasedOnCountryJurisdiction = $showBasedOnCountryJurisdiction;
    }

    /**
     * @return mixed
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    public function setHidden($hidden)
    {
        $this->hidden=$hidden;
    }

    /**
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @return mixed
     */
    public function getNoDepositCodes()
    {
        return $this->noDepositCodes;
    }

    /**
     * @return mixed
     */
    public function getDontShowFactualInformation()
    {
        return $this->dontShowFactualInformation;
    }

    /**
     * @param mixed $dontShowFactualInformation
     */
    public function setDontShowFactualInformation($dontShowFactualInformation): void
    {
        $this->dontShowFactualInformation = $dontShowFactualInformation;
    }


}
