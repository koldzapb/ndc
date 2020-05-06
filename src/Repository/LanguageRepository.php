<?php

namespace App\Repository;

use App\Entity\Language;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class LanguageRepository extends ServiceEntityRepository
{



    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Language::class);

    }


    public function languagesForSitemap()
    {

        return $this->createQueryBuilder('l')
            ->select('')
            ->join('l.casinos','c')
            ->getQuery()
            ->getResult();
    }



}
