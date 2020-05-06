<?php

namespace App\Repository;

use App\Entity\BonusValue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BonusValue|null find($id, $lockMode = null, $lockVersion = null)
 * @method BonusValue|null findOneBy(array $criteria, array $orderBy = null)
 * @method BonusValue[]    findAll()
 * @method BonusValue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BonusValueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BonusValue::class);
    }

//    /**
//     * @return BonusValue[] Returns an array of BonusValue objects
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
    public function findOneBySomeField($value): ?BonusValue
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
