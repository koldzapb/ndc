<?php

namespace App\Repository;

use App\Entity\GamesList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class GamesListRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GamesList::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('g')
            ->where('g.something = :value')->setParameter('value', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
