<?php

namespace App\Repository;

use App\Entity\CustomBonus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CustomBonus|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomBonus|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomBonus[]    findAll()
 * @method CustomBonus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomBonusRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CustomBonus::class);
    }

//    /**
//     * @return CustomBonus[] Returns an array of CustomBonus objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CustomBonus
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
