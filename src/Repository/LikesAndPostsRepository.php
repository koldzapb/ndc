<?php

namespace App\Repository;

use App\Entity\LikesAndPosts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


/**
 * @method LikesAndPosts|null find($id, $lockMode = null, $lockVersion = null)
 * @method LikesAndPosts|null findOneBy(array $criteria, array $orderBy = null)
 * @method LikesAndPosts[]    findAll()
 * @method LikesAndPosts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LikesAndPostsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LikesAndPosts::class);
    }


    public function getLatestPostAndLikes($first)
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.timeAdded', 'DESC')
            ->setFirstResult($first)
            ->setMaxResults(7)
            ->getQuery()
            ->getResult()
        ;
    }



    public function likesAndPostsForCasino($casinoId,$first)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.post = :val')
            ->setParameter('val', $casinoId)
            ->setFirstResult($first)
            ->getQuery()
            ->getResult()
        ;
    }

}
