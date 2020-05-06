<?php

namespace App\Repository;

use App\Entity\Casino;
use App\Entity\CasinoLikes;
use App\Entity\Country;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CasinoLikesRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,EntityManagerInterface $em)
    {
        parent::__construct($registry, CasinoLikes::class);
        $this->em=$em;
    }


    public function getLatestLikes($maxresults,Country $country,$first=0)
    {
        $additionalParameter="";
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck()){
            $additionalParameter="WHERE :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query=$this->em->createQuery("
        SELECT l from App\Entity\CasinoLikes l
        JOIN l.casino c
        ".$additionalParameter."
        ORDER BY l.timeadded DESC
        ");
        if(strlen($additionalParameter)>0) $query->setParameter("childCountry",$childCountry->getId());
        $query->setFirstResult($first);
        $query->setMaxResults($maxresults);
        $paginator = new Paginator($query, $fetchJoinCollection = true);
        return $paginator;
    }


    public function getLikesForCasinoReview(Casino $casino,$first,$max)
    {
        $likes = $this->createQueryBuilder('l')
            ->select('l')
            ->where('l.casino = :casino')
            ->orderBy('l.timeadded', 'DESC')
            ->getQuery()
            ->setParameter('casino', $casino->getId())
            ->setFirstResult($first)
            ->setMaxResults($max)
            ->getResult();

        return $likes;
    }



    public function getLikesForCasinoReviewTotalNumber(Casino $casino)
    {
        $likes = $this->createQueryBuilder('l')
            ->select('COUNT(l)')
            ->where('l.casino = :casino')
            ->orderBy('l.timeadded', 'DESC')
            ->getQuery()
            ->setParameter('casino', $casino->getId())
            ->getSingleScalarResult();

        return $likes;
    }



}
