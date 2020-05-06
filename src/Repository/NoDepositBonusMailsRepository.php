<?php

namespace App\Repository;

use App\Entity\NoDepositBonusMails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NoDepositBonusMails|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoDepositBonusMails|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoDepositBonusMails[]    findAll()
 * @method NoDepositBonusMails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoDepositBonusMailsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NoDepositBonusMails::class);
    }

//    /**
//     * @return NoDepositBonusMails[] Returns an array of NoDepositBonusMails objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NoDepositBonusMails
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
