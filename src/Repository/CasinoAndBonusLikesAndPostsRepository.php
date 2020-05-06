<?php

namespace App\Repository;

use App\Entity\Casino;
use App\Entity\CasinoAndBonusLikesAndPosts;
use App\Entity\Country;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CasinoAndBonusLikesAndPosts|null find($id, $lockMode = null, $lockVersion = null)
 * @method CasinoAndBonusLikesAndPosts|null findOneBy(array $criteria, array $orderBy = null)
 * @method CasinoAndBonusLikesAndPosts[]    findAll()
 * @method CasinoAndBonusLikesAndPosts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CasinoAndBonusLikesAndPostsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CasinoAndBonusLikesAndPosts::class);
    }


    public function getLikesAndPosts($first,$max=7)
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.timeAdded', 'DESC')
            ->setFirstResult($first)
            ->setMaxResults($max)
            ->getQuery()
            ->getResult()
        ;
    }

    public function checkIfLikeExists(Casino $casino,User $user)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.casinoLiked=:casinoLiked')
            ->andWhere('c.userAdded=:userAdded')
            ->setParameter('casinoLiked',$casino->getId())
            ->setParameter('userAdded',$user->getId())
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function likesAndPostsForCasino(Casino $casino,$first,$limit)
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.likedBonus','b')
            ->andWhere('c.casinoLiked=:casinoId OR c.postToCasino=:casinoId OR b.casino=:casinoId ')
            ->orderBy('c.timeAdded','DESC')
            ->setParameter('casinoId',$casino->getId())
            ->setFirstResult($first)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }


   public function getTotalNumberOfEntriesForCasino(Casino $casino)
   {
       return $this->createQueryBuilder('c')
           ->select('COUNT(c)')
           ->andWhere('c.casinoLiked=:casinoId OR c.postToCasino=:casinoId')
           ->setParameter('casinoId',$casino->getId())
           ->getQuery()
           ->getSingleScalarResult();
   }

   public function getUserPosts(User $user)
   {
       return $this->createQueryBuilder('c')
           ->join('c.type','t')
           ->andWhere('c.userAdded=:userId')
           ->andWhere('t.name=:type')
           ->orderBy('c.timeAdded','DESC')
           ->getQuery()
           ->setParameter('userId',$user->getId())
           ->setParameter('type',"Casino Post")
           ->getResult();
   }

   public function getNumberOfUserCasinoLikes(User $user)
   {
       return $this->createQueryBuilder('c')
           ->select('COUNT(c)')
           ->join('c.type','t')
           ->andWhere('c.userAdded=:userId')
           ->andWhere('t.name=:type')
           ->getQuery()
           ->setParameter('userId',$user->getId())
           ->setParameter('type',"Casino Like")
           ->getSingleScalarResult();
   }

   public function getNumberOfUserCasinoPosts(User $user)
   {
       return $this->createQueryBuilder('c')
           ->select('COUNT(c)')
           ->join('c.type','t')
           ->andWhere('c.userAdded=:userId')
           ->andWhere('t.name=:type')
           ->getQuery()
           ->setParameter('userId',$user->getId())
           ->setParameter('type',"Casino Post")
           ->getSingleScalarResult();
   }

   public function getTopThreeLikedBonuses(Country $country)
   {
       $qb= $this->createQueryBuilder('c')
           ->join('c.type','t')
           ->join('c.likedBonus','likedBonus')
           ->join('likedBonus.casino','casino')
           ->addSelect('COUNT(c) as count')
           ->andWhere('t.name=:typeName')
           ->andWhere('DATE_DIFF(CURRENT_DATE(),c.timeAdded) <= 30')
           ->andWhere(':country NOT MEMBER OF likedBonus.restrictedcountries ')
           ->andWhere(':country NOT MEMBER OF casino.countries ')
           ->groupBy('c.likedBonus');

       $childCountry=$country->getChildCountry();
       if($childCountry instanceof Country && $childCountry->getJurisdictionCheck() ){
           $qb->andWhere(":childCountry MEMBER OF casino.countriesWithJurisdictions");
           $qb->setParameter(":childCountry",$childCountry->getId());
       }

       return $qb->setParameter('typeName','Bonus Like')
           ->setParameter('country',$country->getId())
           ->orderBy('count','DESC')
           ->setMaxResults(3)
           ->getQuery()
           ->getResult();
   }
}
