<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BonusRepository")
 */
class Bonus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Casino",inversedBy="bonuses")
     * @ORM\JoinColumn(name="casino_id",referencedColumnName="id",onDelete="CASCADE")
     */
    private $casino;

    /**
     * @ORM\Column(type="text",name="extraintable",nullable=true)
     */
    private $extraintable;


    /**
     * @ORM\Column(type="boolean",name="cashable",nullable=true)
     */
    private $cashable;

    /**
     * @ORM\Column(type="integer",name="bonuspercent",nullable=true)
     */
    private $bonuspercent;

    /**
     * @ORM\Column(type="decimal",precision=13,scale=4,name="maxbonus")
     */
    private $maxbonus;


    /**
     * @ORM\Column(type="boolean",name="exclusive",options={"default"=false},nullable=true)
     */
    private $exclusive;

    /**
     * @ORM\Column(type="string",length=40,name="code",nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string",length=16,name="symbol",nullable=true)
     */
    private $symbol;

    /**
     * @ORM\Column(type="smallint",name="classicblackjack")
     */
    private $classicblackjack = 0;

    /**
     * @ORM\Column(type="boolean",name="classicblackjackb")
     */
    private $classicblackjackb = false;

    /**
     * @ORM\Column(type="boolean",name="classicblackjackd")
     */
    private $classicblackjackd = false;


    /**
     * @ORM\Column(type="smallint",name="otherblackjack")
     */
    private $otherblackjack = 0;

    /**
     * @ORM\Column(type="boolean",name="otherblackjackb")
     */
    private $otherblackjackb = false;

    /**
     * @ORM\Column(type="boolean",name="otherblackjackd")
     */
    private $otherblackjackd = false;


    /**
     * @ORM\Column(type="smallint",name="videopoker")
     */
    private $videopoker = 0;

    /**
     * @ORM\Column(type="boolean",name="videopokerb")
     */
    private $videopokerb = false;

    /**
     * @ORM\Column(type="boolean",name="videopokerd")
     */
    private $videopokerd = false;


    /**
     * @ORM\Column(type="smallint",name="craps")
     */
    private $craps = 0;

    /**
     * @ORM\Column(type="boolean",name="crapsb")
     */
    private $crapsb = false;


    /**
     * @ORM\Column(type="boolean",name="crapsd")
     */
    private $crapsd = false;


    /**
     * @ORM\Column(type="smallint",name="baccarat")
     */
    private $baccarat = 0;

    /**
     * @ORM\Column(type="boolean",name="baccaratb")
     */
    private $baccaratb = false;


    /**
     * @ORM\Column(type="boolean",name="baccaratd")
     */
    private $baccaratd = false;


    /**
     * @ORM\Column(type="smallint",name="pokergames")
     */
    private $pokergames = 0;

    /**
     * @ORM\Column(type="boolean",name="pokergamesb")
     */
    private $pokergamesb = false;


    /**
     * @ORM\Column(type="boolean",name="pokergamesd")
     */
    private $pokergamesd = false;


    /**
     * @ORM\Column(type="smallint",name="casinowar")
     */
    private $casinowar = 0;

    /**
     * @ORM\Column(type="boolean",name="casinowarb")
     */
    private $casinowarb = false;


    /**
     * @ORM\Column(type="boolean",name="casinoward")
     */
    private $casinoward = false;


    /**
     * @ORM\Column(type="smallint",name="sicbo")
     */
    private $sicbo = 0;

    /**
     * @ORM\Column(type="boolean",name="sicbob")
     */
    private $sicbob = false;


    /**
     * @ORM\Column(type="boolean",name="sicbod")
     */
    private $sicbod = false;


    /**
     * @ORM\Column(type="smallint",name="americanroulette")
     */
    private $americanroulette = 0;

    /**
     * @ORM\Column(type="boolean",name="americanrouletteb")
     */
    private $americanrouletteb = false;


    /**
     * @ORM\Column(type="boolean",name="americanrouletted")
     */
    private $americanrouletted = false;


    /**
     * @ORM\Column(type="smallint",name="otherroulette")
     */
    private $otherroulette = 0;

    /**
     * @ORM\Column(type="boolean",name="otherrouletteb")
     */
    private $otherrouletteb = false;


    /**
     * @ORM\Column(type="boolean",name="otherrouletted")
     */
    private $otherrouletted = false;


    /**
     * @ORM\Column(type="smallint",name="slots")
     */
    private $slots = 0;

    /**
     * @ORM\Column(type="boolean",name="slotsb")
     */
    private $slotsb = false;


    /**
     * @ORM\Column(type="boolean",name="slotsd")
     */
    private $slotsd = false;


    /**
     * @ORM\Column(type="smallint",name="parlorgames")
     */
    private $parlorgames = 0;

    /**
     * @ORM\Column(type="boolean",name="parlorgamesb")
     */
    private $parlorgamesb = false;


    /**
     * @ORM\Column(type="boolean",name="parlorgamesd")
     */
    private $parlorgamesd = false;

    /**
     * @ORM\Column(type="boolean",name="bonusgiven")
     */
    private $bonusgiven;

    /**
     * @ORM\Column(type="string",length=255,name="bonusurl")
     */
    private $bonusurl;


    /**
     * @ORM\Column(type="string",length=255,name="forumthread",nullable=true)
     */
    private $forumthread;


    /**
     * @ORM\Column(type="datetime",name="timeadded")
     */
    private $timeadded;


    /**
     * @ORM\Column(type="datetime",name="timeupdated")
     */
    private $timeupdated;
    /**
     * @ORM\Column(type="string",name="tcurl",nullable=true)
     */
    private $tcurl;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\BonusType",inversedBy="bonuses")
     */
    private $bonustype;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Country",inversedBy="bonuses")
     * @ORM\JoinTable(name="bonusrestrictedcountries" )
     */
    private $restrictedcountries;

    /**
     * @var boolean
     */
    private $availableInCountry;


    /**
     * @ORM\Column(type="integer",name="bonusranking",nullable=true)
     */
    private $bonusranking;

    /**
     * @ORM\Column(type="string",length=10,name="wr",nullable=true)
     */
    private $wr;

    /**
     * @ORM\Column(type="integer",name="freespins",nullable=true)
     */
    private $freespins;

    /**
     * @ORM\Column(type="boolean")
     */
    private $showOnlyFirstValue = false;



    /**
     * @ORM\Column(type="integer",name="lcb_id",nullable=true)
     */
    private $lcbId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CasinoAndBonusLikesAndPosts" , mappedBy="likedBonus")
     */
    private $likes;

    /**
     * @ORM\Column(type="boolean",name="send_nd_mails_for_this_bonus",options={"default"=0},nullable=true)
     */
    private $sendNdMailsForThisBonus;




    /**
     * Bonus constructor.
     */
    public function __construct($id = null)
    {
        if ($id) {
            $this->setId($id);
        }
        $this->restrictedcountries = new ArrayCollection();
        $this->likes=new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getCasino()
    {
        return $this->casino;
    }

    /**
     * @param mixed $casino
     */
    public function setCasino(?Casino $casino): void
    {
        $this->casino = $casino;
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getTimeAdded()
    {
        return $this->timeadded;
    }

    /**
     * @param mixed $timeadded
     */
    public function setTimeAdded($timeadded): void
    {
        $this->timeadded = $timeadded;
    }

    /**
     * @return mixed
     */
    public function getForumThread()
    {
        return $this->forumthread;
    }

    /**
     * @param mixed $forumthread
     */
    public function setForumThread($forumthread): void
    {
        $this->forumthread = $forumthread;
    }

    /**
     * @return mixed
     */
    public function getAmericanrouletteB()
    {
        return $this->americanrouletteb;
    }

    /**
     * @return mixed
     */
    public function getAmericanroulette()
    {
        return $this->americanroulette;
    }


    /**
     * @return mixed
     */
    public function getAmericanrouletteD()
    {
        return $this->americanrouletted;
    }

    /**
     * @return mixed
     */
    public function getBaccarat()
    {
        return $this->baccarat;
    }

    /**
     * @return mixed
     */
    public function getBaccaratB()
    {
        return $this->baccaratb;
    }

    /**
     * @return mixed
     */
    public function getBaccaratD()
    {
        return $this->baccaratd;
    }

    /**
     * @return mixed
     */
    public function getBonusGiven()
    {
        return $this->bonusgiven;
    }

    /**
     * @return mixed
     */
    public function getBonuspercent()
    {
        return $this->bonuspercent;
    }


    /**
     * @return mixed
     */
    public function getBonusUrl()
    {
        return $this->bonusurl;
    }

    /**
     * @return mixed
     */
    public function getCashable()
    {
        return $this->cashable;
    }

    /**
     * @return mixed
     */
    public function getCasinowar()
    {
        return $this->casinowar;
    }

    /**
     * @return mixed
     */
    public function getCasinowarB()
    {
        return $this->casinowarb;
    }

    /**
     * @return mixed
     */
    public function getCasinowarD()
    {
        return $this->casinoward;
    }

    /**
     * @return mixed
     */
    public function getClassicblackjack()
    {
        return $this->classicblackjack;
    }

    /**
     * @return mixed
     */
    public function getClassicblackjackB()
    {
        return $this->classicblackjackb;
    }

    /**
     * @return mixed
     */
    public function getClassicblackjackD()
    {
        return $this->classicblackjackd;
    }

    /**
     * @return mixed
     */
    public function getCraps()
    {
        return $this->craps;
    }

    /**
     * @return mixed
     */
    public function getCrapsB()
    {
        return $this->crapsb;
    }

    /**
     * @return mixed
     */
    public function getCrapsD()
    {
        return $this->crapsd;
    }

    /**
     * @return mixed
     */
    public function getExtraIntable()
    {
        return $this->extraintable;
    }

    /**
     * @return mixed
     */
    public function getMaxbonus()
    {
        return $this->maxbonus;
    }


    /**
     * @return mixed
     */
    public function getOtherblackjack()
    {
        return $this->otherblackjack;
    }

    /**
     * @return mixed
     */
    public function getOtherblackjackB()
    {
        return $this->otherblackjackb;
    }

    /**
     * @return mixed
     */
    public function getOtherblackjackD()
    {
        return $this->otherblackjackd;
    }


    /**
     * @return mixed
     */
    public function getOtherroulette()
    {
        return $this->otherroulette;
    }

    /**
     * @return mixed
     */
    public function getOtherrouletteB()
    {
        return $this->otherrouletteb;
    }

    /**
     * @return mixed
     */
    public function getOtherrouletteD()
    {
        return $this->otherrouletted;
    }

    /**
     * @return mixed
     */
    public function getParlorgames()
    {
        return $this->parlorgames;
    }

    /**
     * @return mixed
     */
    public function getParlorgamesB()
    {
        return $this->parlorgamesb;
    }

    /**
     * @return mixed
     */
    public function getParlorgamesD()
    {
        return $this->parlorgamesd;
    }

    /**
     * @return mixed
     */
    public function getPokergames()
    {
        return $this->pokergames;
    }

    /**
     * @return mixed
     */
    public function getPokergamesB()
    {
        return $this->pokergamesb;
    }

    /**
     * @return mixed
     */
    public function getPokergamesD()
    {
        return $this->pokergamesd;
    }

    /**
     * @return mixed
     */
    public function getSicbo()
    {
        return $this->sicbo;
    }

    /**
     * @return mixed
     */
    public function getSicboB()
    {
        return $this->sicbob;
    }

    /**
     * @return mixed
     */
    public function getSicboD()
    {
        return $this->sicbod;
    }

    /**
     * @return mixed
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * @return mixed
     */
    public function getSlotsB()
    {
        return $this->slotsb;
    }

    /**
     * @return mixed
     */
    public function getSlotsD()
    {
        return $this->slotsd;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return mixed
     */
    public function getVideopoker()
    {
        return $this->videopoker;
    }

    /**
     * @return mixed
     */
    public function getVideopokerB()
    {
        return $this->videopokerb;
    }

    /**
     * @return mixed
     */
    public function getVideopokerD()
    {
        return $this->videopokerd;
    }

    /**
     * @param mixed $americanroulette
     */
    public function setAmericanroulette($americanroulette): void
    {
        $this->americanroulette = $americanroulette;
    }

    /**
     * @param mixed $americanrouletteb
     */
    public function setAmericanrouletteB($americanrouletteb): void
    {
        $this->americanrouletteb = $americanrouletteb;
    }

    /**
     * @param mixed $americanrouletted
     */
    public function setAmericanrouletteD($americanrouletted): void
    {
        $this->americanrouletted = $americanrouletted;
    }

    /**
     * @param mixed $baccarat
     */
    public function setBaccarat($baccarat): void
    {
        $this->baccarat = $baccarat;
    }

    /**
     * @param mixed $baccaratb
     */
    public function setBaccaratB($baccaratb): void
    {
        $this->baccaratb = $baccaratb;
    }

    /**
     * @param mixed $baccaratd
     */
    public function setBaccaratD($baccaratd): void
    {
        $this->baccaratd = $baccaratd;
    }

    /**
     * @param mixed $bonusgiven
     */
    public function setBonusGiven($bonusgiven): void
    {
        $this->bonusgiven = $bonusgiven;
    }

    /**
     * @param mixed $bonuspercent
     */
    public function setBonuspercent($bonuspercent): void
    {
        $this->bonuspercent = $bonuspercent;
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
    public function setBonustype(BonusType $bonustype): void
    {
        $this->bonustype = $bonustype;
    }

    /**
     * @param mixed $bonusurl
     */
    public function setBonusUrl($bonusurl): void
    {
        $this->bonusurl = $bonusurl;
    }

    /**
     * @param mixed $cashable
     */
    public function setCashable($cashable): void
    {
        $this->cashable = $cashable;
    }

    /**
     * @param mixed $casinowar
     */
    public function setCasinowar($casinowar): void
    {
        $this->casinowar = $casinowar;
    }


    /**
     * @param mixed $casinowarb
     */
    public function setCasinowarB($casinowarb): void
    {
        $this->casinowarb = $casinowarb;
    }

    /**
     * @param mixed $casinoward
     */
    public function setCasinowarD($casinoward): void
    {
        $this->casinoward = $casinoward;
    }

    /**
     * @param mixed $classicblackjack
     */
    public function setClassicblackjack($classicblackjack): void
    {
        $this->classicblackjack = $classicblackjack;
    }

    /**
     * @param mixed $classicblackjackb
     */
    public function setClassicblackjackB($classicblackjackb): void
    {
        $this->classicblackjackb = $classicblackjackb;
    }

    /**
     * @param mixed $classicblackjackd
     */
    public function setClassicblackjackD($classicblackjackd): void
    {
        $this->classicblackjackd = $classicblackjackd;
    }

    /**
     * @param mixed $craps
     */
    public function setCraps($craps): void
    {
        $this->craps = $craps;
    }

    /**
     * @param mixed $crapsb
     */
    public function setCrapsB($crapsb): void
    {
        $this->crapsb = $crapsb;
    }

    /**
     * @param mixed $crapsd
     */
    public function setCrapsD($crapsd): void
    {
        $this->crapsd = $crapsd;
    }

    /**
     * @param mixed $extraintable
     */
    public function setExtraIntable($extraintable): void
    {
        $this->extraintable = $extraintable;
    }

    /**
     * @param mixed $maxbonus
     */
    public function setMaxbonus($maxbonus): void
    {
        $this->maxbonus = $maxbonus;
    }

    /**
     * @param mixed $otherblackjack
     */
    public function setOtherblackjack($otherblackjack): void
    {
        $this->otherblackjack = $otherblackjack;
    }

    /**
     * @param mixed $otherblackjackb
     */
    public function setOtherblackjackB($otherblackjackb): void
    {
        $this->otherblackjackb = $otherblackjackb;
    }

    /**
     * @param mixed $otherblackjackd
     */
    public function setOtherblackjackD($otherblackjackd): void
    {
        $this->otherblackjackd = $otherblackjackd;
    }

    /**
     * @param mixed $otherroulette
     */
    public function setOtherroulette($otherroulette): void
    {
        $this->otherroulette = $otherroulette;
    }

    /**
     * @param mixed $otherrouletteb
     */
    public function setOtherrouletteB($otherrouletteb): void
    {
        $this->otherrouletteb = $otherrouletteb;
    }

    /**
     * @param mixed $otherrouletted
     */
    public function setOtherrouletteD($otherrouletted): void
    {
        $this->otherrouletted = $otherrouletted;
    }

    /**
     * @param mixed $parlorgames
     */
    public function setParlorgames($parlorgames): void
    {
        $this->parlorgames = $parlorgames;
    }

    /**
     * @param mixed $parlorgamesb
     */
    public function setParlorgamesB($parlorgamesb): void
    {
        $this->parlorgamesb = $parlorgamesb;
    }

    /**
     * @param mixed $parlorgamesd
     */
    public function setParlorgamesD($parlorgamesd): void
    {
        $this->parlorgamesd = $parlorgamesd;
    }

    /**
     * @param mixed $pokergames
     */
    public function setPokergames($pokergames): void
    {
        $this->pokergames = $pokergames;
    }

    /**
     * @param mixed $pokergamesb
     */
    public function setPokergamesB($pokergamesb): void
    {
        $this->pokergamesb = $pokergamesb;
    }

    /**
     * @param mixed $pokergamesd
     */
    public function setPokergamesD($pokergamesd): void
    {
        $this->pokergamesd = $pokergamesd;
    }

    /**
     * @param mixed $sicbo
     */
    public function setSicbo($sicbo): void
    {
        $this->sicbo = $sicbo;
    }

    /**
     * @param mixed $sicbob
     */
    public function setSicboB($sicbob): void
    {
        $this->sicbob = $sicbob;
    }

    /**
     * @param mixed $sicbod
     */
    public function setSicboD($sicbod): void
    {
        $this->sicbod = $sicbod;
    }

    /**
     * @param mixed $slots
     */
    public function setSlots($slots): void
    {
        $this->slots = $slots;
    }

    /**
     * @param mixed $slotsb
     */
    public function setSlotsB($slotsb): void
    {
        $this->slotsb = $slotsb;
    }

    /**
     * @param mixed $slotsd
     */
    public function setSlotsD($slotsd): void
    {
        $this->slotsd = $slotsd;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol): void
    {
        $this->symbol = $symbol;
    }

    /**
     * @param mixed $videopoker
     */
    public function setVideopoker($videopoker): void
    {
        $this->videopoker = $videopoker;
    }

    /**
     * @param mixed $videopokerb
     */
    public function setVideopokerB($videopokerb): void
    {
        $this->videopokerb = $videopokerb;
    }

    /**
     * @param mixed $videopokerd
     */
    public function setVideopokerD($videopokerd): void
    {
        $this->videopokerd = $videopokerd;
    }

    /**
     * @return mixed
     */
    public function getTimeupdated()
    {
        return $this->timeupdated;
    }

    /**
     * @param mixed $timeupdated
     */
    public function setTimeupdated($timeupdated): void
    {
        $this->timeupdated = $timeupdated;
    }

    /**
     * @return mixed
     */
    public function getTcurl()
    {
        return $this->tcurl;
    }

    /**
     * @param mixed $tcurl
     */
    public function setTcurl($tcurl): void
    {
        $this->tcurl = $tcurl;
    }

    /**
     * @return mixed
     */
    public function getExclusive()
    {
        return $this->exclusive;
    }

    /**
     * @param mixed $exclusive
     */
    public function setExclusive($exclusive): void
    {
        $this->exclusive = $exclusive;
    }

    /**
     * @return mixed
     */
    public function getRestrictedcountries()
    {
        return $this->restrictedcountries;
    }


    public function addRestrictedCountry(Country $country)
    {
        if (!$this->restrictedcountries->contains($country)) {
            $this->restrictedcountries->add($country);
        }
    }

    /**
     * @return bool
     */
    public function isAvailableInCountry(): bool
    {
        return $this->availableInCountry;
    }

    /**
     * @param bool $availableInCountry
     */
    public function setAvailableInCountry(bool $availableInCountry): void
    {
        $this->availableInCountry = $availableInCountry;
    }

    /**
     * @return mixed
     */
    public function getBonusranking()
    {
        return $this->bonusranking;
    }

    /**
     * @param mixed $bonusranking
     */
    public function setBonusranking($bonusranking): void
    {
        $this->bonusranking = $bonusranking;
    }

    /**
     * @return mixed
     */
    public function getWr()
    {
        return $this->wr;
    }

    /**
     * @param mixed $wr
     */
    public function setWr($wr): void
    {
        $this->wr = $wr;
    }

    /**
     * @return mixed
     */
    public function getFreespins()
    {
        return $this->freespins;
    }


    /**
     * @param mixed $freespins
     */
    public function setFreespins($freespins): void
    {
        $this->freespins = $freespins;
    }

    public function getMaxbonusshow()
    {
        return strstr($this->maxbonus, '.', 1);
    }


   public function getBonustypename()
   {
      return  ($this->bonustype instanceof BonusType )?$this->bonustype->getName():"";
   }

   public function getRatingpercent()
   {
       return round($this->getCasino()->getAveragerating() / 5 * 100);
   }

    public function getShowOnlyFirstValue()
    {
        return $this->showOnlyFirstValue;
    }

    public function setShowOnlyFirstValue($showOnlyFirstValue): self
    {
        $this->showOnlyFirstValue = $showOnlyFirstValue;
        return $this;
    }

    public function getWrCount()
    {
        $wrs=['classicblackjack','otherblackjack','videopoker','craps','baccarat','pokergames','casinowar','sicbo','americanroulette','otherroulette','slots','parlorgames'];
        return array_sum(array_map(function($game){ return intval($this->$game > 0 ); },$wrs));
    }



    /**
     * @return mixed
     */
    public function getLcbId()
    {
        return $this->lcbId;
    }

    /**
     * @param mixed $lcbId
     */
    public function setLcbId($lcbId): void
    {
        $this->lcbId = $lcbId;
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
    public function getSendNdMailsForThisBonus()
    {
        return $this->sendNdMailsForThisBonus;
    }

    /**
     * @param mixed $sendNdMailsForThisBonus
     */
    public function setSendNdMailsForThisBonus($sendNdMailsForThisBonus): void
    {
        $this->sendNdMailsForThisBonus = $sendNdMailsForThisBonus;
    }


}
