<?php

namespace App\Repository;

use App\Entity\BonusLikes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BonusLikes|null find($id, $lockMode = null, $lockVersion = null)
 * @method BonusLikes|null findOneBy(array $criteria, array $orderBy = null)
 * @method BonusLikes[]    findAll()
 * @method BonusLikes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BonusLikesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BonusLikes::class);
    }

//    /**
//     * @return BonusLikes[] Returns an array of BonusLikes objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BonusLikes
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
