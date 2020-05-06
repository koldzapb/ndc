<?php

namespace App\Repository;

use App\Entity\ShortCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ShortCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShortCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShortCode[]    findAll()
 * @method ShortCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShortCodeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ShortCode::class);
    }

//    /**
//     * @return ShortCode[] Returns an array of ShortCode objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ShortCode
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
