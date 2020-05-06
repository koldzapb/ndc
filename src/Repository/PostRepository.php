<?php

namespace App\Repository;

use App\Entity\Casino;
use App\Entity\Country;
use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PostRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,EntityManagerInterface $em)
    {
        parent::__construct($registry, Post::class);
        $this->em=$em;

    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function getLatestPosts($maxresults,Country $country,$first=0)
    {
        $additionalParameter="";
        $childCountry=$country->getChildCountry();
        if($childCountry instanceof Country && $childCountry->getJurisdictionCheck()){
            $additionalParameter="WHERE :childCountry MEMBER OF c.countriesWithJurisdictions";
        }
        $query=$this->em->createQuery("
        SELECT p FROM App\Entity\Post p
        JOIN p.casino c
        ".$additionalParameter."
        ORDER BY p.timeadded DESC 
        
        ");
        if(strlen($additionalParameter)>0) $query->setParameter("childCountry",$childCountry->getId());
        $query->setFirstResult($first);
        $query->setMaxResults($maxresults);
        $paginator = new Paginator($query, $fetchJoinCollection = true);
        return $paginator;

    }


    public function postsForCasinoReview(Casino $casino,$first,$max)
    {
        $posts = $this->createQueryBuilder('p')
            ->select('p')
            ->where('p.casino = :casino')
            ->orderBy('p.timeadded', 'DESC')
            ->getQuery()
            ->setParameter('casino', $casino->getId())
            ->setFirstResult($first)
            ->setMaxResults($max)
            ->getResult();

        return $posts;
    }


    public function postsForCasinoReviewTotalNumber(Casino $casino)
    {
        $posts = $this->createQueryBuilder('p')
            ->select('COUNT(p)')
            ->where('p.casino = :casino')
            ->orderBy('p.timeadded', 'DESC')
            ->getQuery()
            ->setParameter('casino', $casino->getId())
            ->getSingleScalarResult();

        return $posts;
    }




}
