<?php

namespace App\Repository;

use App\Entity\Casino;
use App\Entity\Currency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CurrencyRepository extends ServiceEntityRepository
{




    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Currency::class);

    }


    public function currenciesForSitemap()
    {
        return $this->createQueryBuilder('c')
            ->select('c')
            ->join('c.casinos','cc')
            ->getQuery()
            ->getResult();
    }



}
