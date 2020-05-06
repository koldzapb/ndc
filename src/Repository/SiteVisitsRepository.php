<?php

namespace App\Repository;

use App\Entity\SiteVisits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SiteVisits|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteVisits|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteVisits[]    findAll()
 * @method SiteVisits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteVisitsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SiteVisits::class);
    }

//    /**
//     * @return SiteVisits[] Returns an array of SiteVisits objects
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
    public function findOneBySomeField($value): ?SiteVisits
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
