<?php

namespace App\Repository;

use App\Entity\BonusType;
use App\Entity\Casino;
use App\Entity\Country;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Id\AssignedGenerator;
use Doctrine\ORM\Mapping\ClassMetadata;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;


class CasinoRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Casino::class);
    }

    public function disableAutoIncrement()
    {

        $metadata = $this->getEntityManager()->getClassMetadata(Casino::class);
        $metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
        $metadata->setIdGenerator(new AssignedGenerator());
    }

    public function getAllCasinos(Country $country,$first,$max)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

        $query = $this->createQueryBuilder('c')
            ->select('c,CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->where('c.closed = false')
            ->andWhere('c.hidden=0')
            ->andWhere(isset($additionalParameter)?$additionalParameter:null)
            ->orderBy('c.casinoname')
            ->getQuery();
        $query->setFirstResult($first);
        $query->setMaxResults($max);
        $query->setParameter('country',$country->getId());
        if(isset($additionalParameter)){
            $query->setParameter('childCountry',$childCountry->getId());
        }
        $query->setHydrationMode('CasinoHydrator');
        return new Paginator($query, true);
    }

    public function getNumberOfAllCasinos(Country $country)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query = $this->createQueryBuilder('c')
            ->select('COUNT(c)')
            ->where('c.closed = false')
            ->andWhere("c.hidden=0")
            ->andWhere(isset($additionalParameter)?$additionalParameter:null)
            ->getQuery();
        if(isset($additionalParameter)){
            $query->setParameter('childCountry',$childCountry->getId());
        }
        return $query->getSingleScalarResult();
    }









    public function getCasinoForReview($id,Country $country)
    {
        return $this->createQueryBuilder('c')
            ->select('c, l, k, y, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->leftJoin('c.screenshots', 'l')
            ->leftJoin('c.bankingoptions', 'k')
            ->leftJoin('k.banking', 'y')
            ->where('c.id = :id')
            ->getQuery()
            ->setParameter('id',$id)
            ->setParameter('country',$country->getId())
            ->getResult("CasinoHydrator");
    }






    public function noDepositCasinosOfTheWeek(Country $country,BonusType $noDeposit)
    {

        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

        if(!isset($additionalParameter)){
            return $this->createQueryBuilder('c')
                ->select('c, b,s,t, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
                ->leftJoin('c.bonuses', 'b')
                ->leftJoin('b.bonustype','t')
                ->leftJoin('c.softwares', 's')
                ->leftjoin('s.restrictedcountries', 'rc')
                ->where('c.nodepositoftheweek = true')
                ->andWhere('c.hidden=0')
                ->andWhere(':country NOT MEMBER OF c.countries')
                ->andWhere(':nodeposit=b.bonustype')
                ->getQuery()
                ->setParameter('country',$country->getId())
                ->setParameter('nodeposit',$noDeposit->getId())
                ->getResult("CasinoHydrator");
        }

        return $this->createQueryBuilder('c')
            ->select('c, b, s,t, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->leftJoin('c.bonuses', 'b')
            ->leftJoin('b.bonustype','t')
            ->leftJoin('c.softwares', 's')
            ->leftjoin('s.restrictedcountries', 'rc')
            ->where('c.nodepositoftheweek = true')
            ->andWhere('c.hidden=0')
            ->andWhere(':country NOT MEMBER OF c.countries')
            ->andWhere(':nodeposit=b.bonustype')
            ->andWhere($additionalParameter)
            ->getQuery()
            ->setParameter('country',$country->getId())
            ->setParameter('nodeposit',$noDeposit->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->getResult("CasinoHydrator");

    }

    public function getCasinosForBanking($banking,Country $country)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        if(!isset($additionalParameter)){
            return $this->createQueryBuilder('c')
                ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
                ->join('c.bankingoptions', 'b')
                ->where('b.banking = :banking')
                ->andWhere('c.closed = false')
                ->andWhere("c.hidden=0")
                ->andWhere('b.allowsdeposits = true')
                ->andWhere('b.allowswithdrawals = true')
                ->andWhere(':country NOT MEMBER OF c.countries')
                ->getQuery()
                ->setParameter('banking',$banking)
                ->setParameter('country',$country->getId())
                ->getResult("CasinoHydrator");
        }

        return $this->createQueryBuilder('c')
            ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->join('c.bankingoptions', 'b')
            ->where('b.banking = :banking')
            ->andWhere('c.closed = false')
            ->andWhere('c.hidden = 0')
            ->andWhere('b.allowsdeposits = true')
            ->andWhere('b.allowswithdrawals = true')
            ->andWhere($additionalParameter)
            ->andWhere(':country NOT MEMBER OF c.countries')
            ->getQuery()
            ->setParameter('banking',$banking)
            ->setParameter('country',$country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->getResult("CasinoHydrator");
    }

    public function getCasinosForCurrency($currency,Country $country)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        if(!isset($additionalParameter)){
            return $this->createQueryBuilder('c')
                ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
                ->where(':currency MEMBER OF c.currencies')
                ->andWhere('c.closed = false')
                ->andWhere('c.hidden=0')
                ->andWhere(':country NOT MEMBER OF c.countries')
                ->getQuery()
                ->setParameter('currency',$currency)
                ->setParameter('country',$country->getId())
                ->getResult("CasinoHydrator");
        }
        return $this->createQueryBuilder('c')
            ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->where(':currency MEMBER OF c.currencies')
            ->andWhere('c.closed = false')
            ->andWhere('c.hidden=0')
            ->andWhere(':country NOT MEMBER OF c.countries')
            ->andWhere($additionalParameter)
            ->getQuery()
            ->setParameter('currency',$currency)
            ->setParameter('country',$country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->getResult("CasinoHydrator");

    }

    public function getCasinosForLanguage($language,Country $country)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        if(!isset($additionalParameter)){
            return $this->createQueryBuilder('c')
                ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
                ->where(':language MEMBER OF c.languages')
                ->andWhere('c.closed = false')
                ->andWhere('c.hidden=0')
                ->andWhere(':country NOT MEMBER OF c.countries')
                ->getQuery()
                ->setParameter('language',$language)
                ->setParameter('country',$country->getId())
                ->getResult("CasinoHydrator");
        }
        return $this->createQueryBuilder('c')
            ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->where(':language MEMBER OF c.languages')
            ->andWhere('c.closed = false')
            ->andWhere('c.hidden=0')
            ->andWhere(':country NOT MEMBER OF c.countries')
            ->andWhere($additionalParameter)
            ->getQuery()
            ->setParameter('language',$language)
            ->setParameter('country',$country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->getResult("CasinoHydrator");

    }

    public function getBestCasinosForCountry(Country $country)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        if(!isset($additionalParameter)){
            return $this->createQueryBuilder('c')
                ->select('c')
                ->join('c.group', 'g')
                ->where(':country MEMBER OF g.countries')
                ->andWhere(':country NOT MEMBER OF c.countries')
                ->getQuery()
                ->setParameter('country',$country->getId())
                ->getResult();
        }
        return $this->createQueryBuilder('c')
            ->select('c')
            ->join('c.group', 'g')
            ->where(':country MEMBER OF g.countries')
            ->andWhere(':country NOT MEMBER OF c.countries')
            ->andWhere($additionalParameter)
            ->getQuery()
            ->setParameter('country',$country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->getResult();
    }

    public function getCasinosNumber()
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.closed = false')
            ->andWhere("c.hidden=0")
            ->getQuery()
            ->getSingleScalarResult();
    }



    public function calculateAwardRank()
    {
        $query = "UPDATE
                      casino
                      INNER JOIN
                      (SELECT
                          id,
                          (@rank := @rank + 1) AS rank,
                          likes,
                          posts
                      FROM
                          (select c.id, count(cl.id) as likes, count(p.id) as posts from casino c
                                              left join casino_likes cl on c.id = cl.casino_id
                                              left join post p on c.id = p.casino_id
                           group by c.id
                           order by count(cl.id) DESC, count(p.id) DESC) t1,
                          (SELECT @rank := 0) t2) tmp on tmp.id = casino.id
                    set casino.awardrank = tmp.rank, casino.totallikes = tmp.likes, casino.totalcomments = tmp.posts";
        return $this->getEntityManager()->getConnection()->exec($query);
    }


    public function getSortedCasinos(Country $country,$max,$order)
    {
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
            $additionalParameter=" :childCountry MEMBER OF c.countriesWithJurisdictions";
        }

        if(!isset($additionalParameter)){
            list($order, $dir) = explode(' ', $order, 2);
            $query = $this->createQueryBuilder('c')
                ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
                ->where('c.closed = false')
                ->andWhere('c.hidden=0')
                ->orderBy('c.' . $order, $dir)
                ->getQuery()
                ->setFirstResult(0)
                ->setMaxResults($max)
                ->setParameter('country',$country->getId())
                ->setHydrationMode('CasinoHydrator');
            return new Paginator($query, true);
        }

        list($order, $dir) = explode(' ', $order, 2);
        $query = $this->createQueryBuilder('c')
            ->select('c, CASE WHEN :country NOT MEMBER OF c.countries THEN 1 ELSE 0 END AS available')
            ->where('c.closed = false')
            ->andWhere($additionalParameter)
            ->orderBy('c.' . $order, $dir)
            ->getQuery()
            ->setFirstResult(0)
            ->setMaxResults(10)
            ->setParameter('country',$country->getId())
            ->setParameter('childCountry',$childCountry->getId())
            ->setHydrationMode('CasinoHydrator');
        return new Paginator($query, true);
    }





    public function getCasinosForReplacement()
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->where('c.closed = false')
            ->andWhere('c.hidden=0')
            ->orderBy('c.casinoname', 'ASC')
            ->getQuery()
            ->getResult();
    }


    public function getAllNonClosedCasinos()
    {
        return $this->createQueryBuilder("c")
            ->select("c")
            ->where("c.closed = false")
            ->andWhere('c.hidden=0')
            ->andWhere("c.reviewtext <>''")
            ->andWhere("c.reviewtext is not  null")
            ->orderBy("c.id", "ASC")
            ->getQuery()
            ->getResult();
    }


    public function deleteNonExistingCasinos($existingCasinosIds)
    {
        $qb = $this->createQueryBuilder('c')
            ->delete()
            ->where('c.id NOT IN (:existingcasinos)')
            ->getQuery();
        $qb->setParameter('existingcasinos',$existingCasinosIds);
        $qb->execute();
    }








}