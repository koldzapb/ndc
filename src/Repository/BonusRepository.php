<?php

namespace App\Repository;

use App\Entity\Bonus;
use App\Entity\BonusType;
use App\Entity\Casino;
use App\Entity\Country;
use App\Entity\Software;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

class BonusRepository extends ServiceEntityRepository
{
    private $em;
    private $noDepositBonusType;


    public function __construct(RegistryInterface $registry,EntityManagerInterface $em)
    {
        parent::__construct($registry, Bonus::class);
        $this->em=$em;
        $this->noDepositBonusType=$this->em->getRepository(BonusType::class)->findOneBy(['name'=>'No Deposit']);

    }


    public function determineOrder($order)
    {

        switch($order)
        {
            case "highRating":$order="b.bonusranking ASC";
                break;
            case "lowRating":$order="b.bonusranking DESC";
                break;
            case "nameAsc":$order="c.casinoname ASC";
                break;
            case "nameDesc":$order="c.casinoname DESC";
                break;
            case "highAmount":$order="b.maxbonus DESC";
        }
        return $order;

    }

    public function getLatestBonuses(Country $country)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter=$childCountry instanceof Country && $childCountry->getJurisdictionCheck()?
            $additionalParameter=" AND :childCountry MEMBER OF l.countriesWithJurisdictions":"";

            $query=$this->em->createQuery("
        SELECT b,l FROM App\Entity\Bonus b
        JOIN b.casino l
        WHERE b.bonustype =:nodeposit AND l.hidden=0  AND :country NOT MEMBER OF l.countries AND l.closed=0 AND :country NOT MEMBER OF b.restrictedcountries ".$additionalParameter." 
        ORDER BY b.timeadded DESC 
        ");

        $query->setMaxResults(4);
        $query->setParameter("country",$country->getId());
        $query->setParameter('nodeposit',$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getResult();



    }

    public function getBonusesByType($type,Country $country,$sort="",$first=0,$max=15)
    {
        if($sort=="highRating")
        {
            $sort="c.averagerating DESC";
        }
        elseif ($sort=="lowRating")
        {
            $sort="c.averagerating ASC";
        }
        elseif ($sort=="A-Z")
        {
            $sort="c.casinoname ASC";
        }
        elseif ($sort=="Z-A")
        {
            $sort="c.casinoname DESC";
        }
        elseif ($sort=="highAmount")
        {
            $sort="b.maxbonus DESC";
        }

        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter="AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }


            $query=$this->em->createQuery("
            SELECT b,c,t from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustype t
            WHERE t.name LIKE :btype AND c.closed=0 AND c.hidden=0 AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
            ORDER BY ".$sort." 
            ");

        $query->setFirstResult($first);
        $query->setMaxResults($max);
        $query->setParameter('btype',$type);
        $query->setParameter('country',$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getResult();

    }



    public function countBonusesByType($type,Country $country)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
            $query=$this->em->createQuery("
            SELECT COUNT(b.id) from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustype t
            WHERE t.name LIKE :btype AND c.closed=0 AND c.hidden=0 AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
            ORDER BY b.bonusranking ASC 
            ");
        $query->setParameter('btype',$type);
        $query->setParameter('country',$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getSingleScalarResult();
    }


    public function getNewBonuses(Country $country,$sort,$first=0,$max=15)
    {
        if($sort=="Highest Rating")
        {
            $sort="c.averagerating DESC";
        }
        elseif ($sort=="Lowest Rating")
        {
            $sort="c.averagerating ASC";
        }
        elseif ($sort=="A-Z")
        {
            $sort="c.casinoname ASC";
        }
        elseif ($sort=="Z-A")
        {
            $sort="c.casinoname DESC";
        }
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

        $query=$this->em->createQuery("
            SELECT b,c,t from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustypes t
            WHERE DATE_DIFF(CURRENT_DATE(),b.timeadded)<60 AND c.closed=0 AND c.hidden=0 AND :country NOT MEMBER OF b.restrictedcountries AND t.id=1 AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
            ORDER BY ".$sort." 
            
            ");
        $query->setParameter('country',$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        $query->setFirstResult($first);
        $query->setMaxResults($max);
        return $query->getResult();

    }

    public function getLatestBonusesForNewSection(Country $country,$max)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query=$this->em->createQuery("
        SELECT b,c,t FROM App\Entity\Bonus b
        JOIN b.casino c
        JOIN b.bonustype t
        WHERE t.name LIKE 'No Deposit' AND c.hidden=0 AND c.closed=0  AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
        ORDER BY b.timeadded DESC 
        ");
        $query->setMaxResults($max);
        $query->setParameter("country",$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getResult();



    }







    public function countNewBonuses(Country $country)
    {
        $query=$this->em->createQuery("
            SELECT COUNT(b) from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustype t
            WHERE DATE_DIFF(CURRENT_DATE(),b.timeadded)<60 AND c.hidden=0 AND c.closed=0 AND :country NOT MEMBER OF b.restrictedcountries AND t.id=1 AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries
            
            
            ");
        $query->setParameter('country',$country->getId());
        return $query->getSingleScalarResult();

    }









    public function countBonusesByTypeNew(Country $country)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query=$this->em->createQuery("
            SELECT COUNT (b.id) from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustypes t
            WHERE DATE_DIFF(CURRENT_DATE(),b.timeadded)<60 AND c.hidden=0 AND c.closed=0  AND :country NOT MEMBER OF b.restrictedcountries AND t.id=1 AND :country NOT MEMBER OF c.countries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
            ORDER BY b.bonusranking ASC 
            
            ");
        $query->setParameter('country',$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getSingleScalarResult();

    }

    public function getExclusiveBonuses(Country $country,$sort,$first=0,$max=15)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        if($sort=="highRating")
        {
            $sort="c.averagerating DESC";
        }
        elseif ($sort=="lowRating")
        {
            $sort="c.averagerating ASC";
        }
        elseif ($sort=="A-Z")
        {
            $sort="c.casinoname ASC";
        }
        elseif ($sort=="Z-A")
        {
            $sort="c.casinoname DESC";
        }
        elseif ($sort=="highAmount")
        {
            $sort="b.maxbonus DESC";
        }

        $query=$this->em->createQuery("
            SELECT b,c,t from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustype t
            WHERE b.exclusive=TRUE AND c.hidden=0 AND c.closed=0 AND :country NOT MEMBER OF b.restrictedcountries AND t.id=1 AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
            ORDER BY ".$sort." 
            ");

        $query->setParameter('country',$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        $query->setFirstResult($first);
        $query->setMaxResults($max);
        return $query->getResult();

    }


    public function getExclusiveBonusesCount(Country $country)
    {

        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

            $query=$this->em->createQuery("
            SELECT COUNT (b.id) from App\Entity\Bonus b 
            INNER JOIN b.casino c
            INNER JOIN b.bonustype t
            WHERE b.exclusive=TRUE AND c.closed=0 AND :country NOT MEMBER OF b.restrictedcountries AND t.id=1 AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries ".$additionalParameter."
            ORDER BY b.bonusranking ASC 
            ");

        $query->setParameter('country',$country->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getSingleScalarResult();

    }





    public function getBonusesForReview(Casino $casino,Country $country)
    {

        $query=$this->em->createQuery("
            SELECT b,bt
            FROM App\Entity\Bonus b
            JOIN b.bonustype bt
            JOIN App\Entity\Casino c
            WHERE b.casino=:casino AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries
            ORDER BY b.lcbId ASC
            
            ");
        $query->setParameter('casino',$casino->getId());
        $query->setParameter('country',$country->getId());
        return $query->getResult();
    }






    public function getAllBonusesForCountry(Country $country,$first,$max,$order,$usersCountry)
    {
        $childCountry=$usersCountry->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

        $order=($order!="")?$this->determineOrder($order):"b.maxbonus DESC";
        $query=$this->em->createQuery("
        SELECT b FROM App\Entity\Bonus b
        JOIN b.bonustype bt
        JOIN b.casino c
        LEFT JOIN c.softwares s 
        WHERE c.casinoname NOT LIKE '%Blacklisted%' AND c.casinoname NOT LIKE '%Closed%'
        AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries
        AND c.closed=0
        AND bt=:nodeposit AND c.hidden=0
        ".$additionalParameter."
        ORDER BY ".$order."
        ");

        $query->setFirstResult($first);
        $query->setMaxResults($max);
        $query->setParameter('country',$country->getId());
        $query->setParameter('nodeposit',$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)>0){
            $query->setParameter('childCountry',$childCountry->getId());
        }
        $paginator = new Paginator($query, $fetchJoinCollection = true);
        return $paginator;

    }





    public function getBonusesNumberForCountry(Country $country,Country $usersCountry)
    {
        $childCountry=$usersCountry->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query=$this->em->createQuery("
        SELECT COUNT(b) FROM App\Entity\Bonus b
        JOIN b.bonustype bt 
        JOIN b.casino c
        WHERE c.casinoname NOT LIKE '%Blacklisted%' AND c.closed=0 AND c.casinoname NOT LIKE '%Closed%'
        ".$additionalParameter."
        AND :country NOT MEMBER OF b.restrictedcountries AND :country NOT MEMBER OF c.countries
        AND bt=:nodeposit AND c.hidden=0
        
        ");
        $query->setParameter('country',$country->getId());
        $query->setParameter('nodeposit',$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)>0){
            $query->setParameter('childCountry',$childCountry->getId());
        }
        return $query->getSingleScalarResult();
    }






    public function getAllBonusesForSoftware(Country $country, Software $software,$first,$max,$order)
    {

        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $order=$this->determineOrder($order);
        $query=$this->em->createQuery("
        SELECT b,c,s FROM App\Entity\Bonus  b
        JOIN b.bonustype bt
        JOIN b.casino c
        LEFT JOIN c.softwares s 
        WHERE (c.casinoname NOT LIKE '%Closed%') 
        AND (c.casinoname NOT LIKE '%Blacklisted%') 
        AND :country NOT MEMBER OF b.restrictedcountries 
        AND :country NOT MEMBER OF c.countries
        AND :software MEMBER OF c.softwares
        AND bt=:nodeposit
        AND c.closed=0
        AND c.hidden=0
        ".$additionalParameter."
        ORDER BY ".$order."
        "
        );
        $query->setFirstResult($first);
        $query->setMaxResults($max);
        $query->setParameter('country',$country->getId());
        $query->setParameter('software',$software->getId());
        $query->setParameter('nodeposit',$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        $paginator = new Paginator($query, $fetchJoinCollection = true);
        return $paginator;
    }



    public function getBonusesNumberForSoftware(Country $country,Software $software)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query=$this->em->createQuery("
        SELECT COUNT(b) FROM App\Entity\Bonus b
        JOIN b.bonustype bt 
        JOIN b.casino c
        WHERE c.casinoname NOT LIKE '%Blacklisted%' 
        AND c.casinoname NOT LIKE '%Closed%'
        AND :country NOT MEMBER OF b.restrictedcountries 
        AND :country NOT MEMBER OF c.countries
        ".$additionalParameter."
        AND :software MEMBER OF c.softwares
        AND bt=:nodeposit
        AND c.hidden=0
        AND c.closed=0
        ");


        $query->setParameter('country',$country->getId());
        $query->setParameter('software',$software->getId());
        $query->setParameter('nodeposit',$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getSingleScalarResult();



    }











    public function getAllBonusesByGameType(Country $country,$gametype,$min,$max,$order)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }


        $gametype=($gametype=="blackjack")?"(b.classicblackjack > 0 OR b.otherblackjack > 0)":"b.$gametype > 0";
        $order=$this->determineOrder($order);
        $query=$this->em->createQuery("
        SELECT b,c,s FROM App\Entity\Bonus b
        JOIN b.bonustype bt 
        JOIN b.casino c
        LEFT JOIN c.softwares s
        WHERE c.casinoname NOT LIKE '%Blacklisted%'
        AND c.casinoname NOT LIKE '%Closed%'
        ".$additionalParameter."
        AND :country NOT MEMBER OF c.countries
        AND :country NOT MEMBER OF b.restrictedcountries
        AND $gametype
        AND bt=:nodeposit
        AND c.hidden=0
        AND c.closed=0
        ORDER BY ".$order." 
        ");
        $query->setFirstResult($min);
        $query->setMaxResults($max);
        $query->setParameter("country",$country->getId());
        $query->setParameter("nodeposit",$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        $paginator= new Paginator($query, $fetchJoinCollection = true);
        return $paginator;

    }


    public function getBonusesNumberForGameType(Country $country,$gametype)
    {
        $childCountry=$country->getChildCountry();
        $additionalParameter="";
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" AND :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $gametype=($gametype=="blackjack")?"(b.classicblackjack > 0 OR b.otherblackjack > 0)":"b.$gametype > 0";
        $query=$this->em->createQuery("
        SELECT COUNT(b) FROM App\Entity\Bonus b 
        JOIN b.bonustype bt
        JOIN b.casino c
        WHERE c.casinoname NOT LIKE '%Blacklisted%'
        AND c.casinoname NOT LIKE '%Closed%'
        ".$additionalParameter."
        AND :country NOT MEMBER OF c.countries
        AND :country NOT MEMBER OF b.restrictedcountries
        AND $gametype
        AND bt=:nodeposit
        AND c.closed=0
        AND c.hidden=0
        
        ");
        $query->setParameter("country",$country->getId());
        $query->setParameter("nodeposit",$this->noDepositBonusType->getId());
        if(strlen($additionalParameter)>0) $query->setParameter('childCountry',$childCountry->getId());
        return $query->getSingleScalarResult();
    }



    public function selectNonExistingBonuses($existingBonusesArray)
    {

        $qb = $this->createQueryBuilder('b')
            ->select()
            ->where('b.lcbId NOT IN (:existingbonuses) AND b.lcbId IS NOT NULL')
            ->getQuery();
        $qb->setParameter('existingbonuses',$existingBonusesArray);
        return $qb->getResult();

    }

    public function getBonusForMeta(Casino $casino, Country $country)
    {
        $bonuses = $this->createQueryBuilder('b')
                        ->select('b, t')
                        ->leftJoin('b.bonustypes', 't')
                        ->where('b.casino = :casino')
                        ->andWhere(':country NOT MEMBER OF b.restrictedcountries')
                        ->orderBy('b.exclusive', 'DESC')
                        ->addOrderBy('b.maxbonus', 'DESC')
                        ->getQuery()
                        ->setParameter('casino', $casino->getId())
                        ->setParameter('country', $country->getId())
                        ->getResult();
        if (count($bonuses) === 0) {
            return null;
        }
        /** @var Bonus $bonus */
        foreach ($bonuses as $bonus) {
            if ($bonus->getExclusive()) {
                return $bonus;
            }
            if ($bonus->getBonustypes()->filter(function (BonusType $bonusType) {
                    return $bonusType->getName() === 'No Deposit';
                })->first() instanceof BonusType) {
                return $bonus;
            }
        }
        return current($bonuses);
    }


    public function getBonusesByValue(BonusType $type,$value,$maxValue,$symbol,Country $country,$first,$max,$order)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

        $orderArray=explode(" ",$this->determineOrder($order));

        if(!isset($additionalParameter)){
            return $this->createQueryBuilder('b')
                ->select('b, t')
                ->join('b.casino','c')
                ->leftJoin('b.bonustype', 't')
                ->where(':type=t')
                ->andWhere('b.maxbonus >= :value')
                ->andWhere('b.maxbonus <= :maxValue')
                ->andWhere('b.symbol = :symbol')
                ->andWhere('c.closed=0')
                ->andWhere('c.hidden=0')
                ->andWhere(':country NOT MEMBER OF b.restrictedcountries')
                ->OrderBy($orderArray[0],$orderArray[1])
                ->getQuery()
                ->setParameter('type', $type->getId())
                ->setParameter('value', $value)
                ->setParameter('maxValue', ($maxValue<1)?PHP_INT_MAX:$maxValue)
                ->setParameter('symbol', $symbol)
                ->setParameter('country', $country->getId())
                ->setFirstResult($first)
                ->setMaxResults($max)
                ->getResult();
        }
        return $this->createQueryBuilder('b')
            ->select('b, t')
            ->join('b.casino','c')
            ->leftJoin('b.bonustype', 't')
            ->where(':type=t')
            ->andWhere('b.maxbonus >= :value')
            ->andWhere('b.maxbonus <= :maxValue')
            ->andWhere('b.symbol = :symbol')
            ->andWhere('c.closed = 0')
            ->andWhere('c.hidden = 0')
            ->andWhere(':country NOT MEMBER OF b.restrictedcountries')
            ->andWhere($additionalParameter)
            ->OrderBy($orderArray[0],$orderArray[1])
            ->getQuery()
            ->setParameter('type', $type->getId())
            ->setParameter('value', $value)
            ->setParameter('maxValue', ($maxValue<1)?PHP_INT_MAX:$maxValue)
            ->setParameter('symbol', $symbol)
            ->setParameter('country', $country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->setFirstResult($first)
            ->setMaxResults($max)
            ->getResult();


    }


    public function getBonusesByValueTotalNumber($type,$value,$maxValue,$symbol,Country $country,$first)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=":childCountry MEMBER OF c.countriesWithJurisdictions";
        }if(!isset($additionalParameter)){
        return $this->createQueryBuilder('b')
            ->select('COUNT(b)')
            ->join('b.casino','c')
            ->where(':type=b.bonustype')
            ->andWhere('b.maxbonus >= :value')
            ->andWhere('b.maxbonus <= :maxValue')
            ->andWhere('b.symbol = :symbol')
            ->andWhere('c.closed = 0')
            ->andWhere('c.hidden = 0')
            ->andWhere(':country NOT MEMBER OF b.restrictedcountries')
            ->orderBy('b.exclusive', 'DESC')
            ->addOrderBy('b.maxbonus', 'DESC')
            ->getQuery()
            ->setParameter('type', $type)
            ->setParameter('value', $value)
            ->setParameter('maxValue', ($maxValue<1)?PHP_INT_MAX:$maxValue)
            ->setParameter('symbol', $symbol)
            ->setParameter('country', $country->getId())
            ->setFirstResult($first)
            ->getSingleScalarResult();
        }
        return $this->createQueryBuilder('b')
            ->select('COUNT(b)')
            ->join('b.casino','c')
            ->where(':type=b.bonustype')
            ->andWhere('b.maxbonus >= :value')
            ->andWhere('b.maxbonus <= :maxValue')
            ->andWhere('b.symbol = :symbol')
            ->andWhere('c.closed = 0')
            ->andWhere('c.hidden = 0')
            ->andWhere(':country NOT MEMBER OF b.restrictedcountries')
            ->andWhere($additionalParameter)
            ->orderBy('b.exclusive', 'DESC')
            ->addOrderBy('b.maxbonus', 'DESC')
            ->getQuery()
            ->setParameter('type', $type)
            ->setParameter('value', $value)
            ->setParameter('maxValue', ($maxValue<1)?PHP_INT_MAX:$maxValue)
            ->setParameter('symbol', $symbol)
            ->setParameter('country', $country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->setFirstResult($first)
            ->getSingleScalarResult();


    }

    public function getAllExclusiveNoDepositBonuses()
    {
        $bonuses=$this->createQueryBuilder("b")
            ->select("b")
            ->join('b.casino','c')
            ->where("b.exclusive = 1")
            ->andWhere("c.hidden=0")
            ->andWhere("c.closed=0")
            ->andWhere("b.bonustype=:nodeposit")
            ->getQuery()
            ->setParameter('nodeposit',$this->noDepositBonusType->getId())
            ->getResult();

        return $bonuses;
    }

    public function getNumberOfExclusiveNoDepositBonuses()
    {
        $bonuses=$this->createQueryBuilder("b")
            ->select("count(b)")
            ->join("b.casino","c")
            ->where("b.exclusive = 1")
            ->andWhere("c.hidden=0")
            ->andWhere("c.closed=0")
            ->andWhere("b.bonustype=:nodeposit")
            ->getQuery()
            ->setParameter('nodeposit',$this->noDepositBonusType->getId())
            ->getSingleScalarResult();

        return $bonuses;
    }

    public function getAllNoDepositBonuses()
    {
        $bonuses=$this->createQueryBuilder("b")
            ->select("b")
            ->join("b.casino","c")
            ->where("b.bonustype=:nodeposit")
            ->andWhere("c.hidden=0")
            ->andWhere("c.closed=0")
            ->getQuery()
            ->setParameter('nodeposit',$this->noDepositBonusType->getId())
            ->getResult();

        return $bonuses;
    }

    public function getNumberOfNoDepositBonuses()
    {
        $bonuses=$this->createQueryBuilder("b")
            ->select("count(b)")
            ->join("b.casino","c")
            ->where("b.bonustype=:nodeposit")
            ->andWhere("c.hidden=0")
            ->andWhere("c.closed=0")
            ->getQuery()
            ->setParameter('nodeposit',$this->noDepositBonusType->getId())
            ->getSingleScalarResult();

        return $bonuses;
    }

    public function getNoDepositBonusesTotalAmount($fromDate = 0)
    {

        $query = $this->em->createQuery("
        SELECT b FROM App\Entity\Bonus b
        JOIN b.bonustype bt
        JOIN b.casino c
        LEFT JOIN c.softwares s
        WHERE c.casinoname NOT LIKE '%Blacklisted%' AND c.casinoname NOT LIKE '%Closed%'
        AND bt=:nodeposit AND c.hidden=0 AND c.closed=0 
        AND (b.timeadded >= :fromDate OR b.timeupdated >= :fromDate)
        ");

        $query->setParameter('nodeposit', $this->noDepositBonusType->getId());
        $query->setParameter('fromDate', $fromDate);

        return $query->getResult();
    }

}
