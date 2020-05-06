<?php

namespace App\Repository;

use App\Entity\LikeAndPostType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LikeAndPostType|null find($id, $lockMode = null, $lockVersion = null)
 * @method LikeAndPostType|null findOneBy(array $criteria, array $orderBy = null)
 * @method LikeAndPostType[]    findAll()
 * @method LikeAndPostType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LikeAndPostTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LikeAndPostType::class);
    }

//    /**
//     * @return LikeAndPostType[] Returns an array of LikeAndPostType objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LikeAndPostType
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
