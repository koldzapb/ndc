<?php

namespace App\Repository;

use App\Entity\Filters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class FiltersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Filters::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('f')
            ->where('f.something = :value')->setParameter('value', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
