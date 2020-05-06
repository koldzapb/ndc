<?php

namespace App\Repository;

use App\Entity\Casino;
use App\Entity\Country;
use App\Entity\Software;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class SoftwareRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Software::class);
        $this->em=$entityManager;
    }

    public function getSoftwaresForReview(Casino $casino,Country $country)
    {
        $query=$this->em->createQuery("
        SELECT s,CASE WHEN :country NOT MEMBER OF s.restrictedcountries THEN 1 ELSE 0 END AS available FROM App\Entity\Software s
        JOIN s.casinos c
        WHERE c=:casino 
        ");
        $query->setParameter('casino',$casino->getId());
        $query->setParameter('country',$country->getId());
        return $query->getResult('SoftwareHydrator');
    }


    public function getSoftwaresForCasino(Casino $casino,Country $country,$first,$max)
    {
        $query=$this->em->createQuery("
        SELECT s,CASE WHEN :country NOT MEMBER OF s.restrictedcountries THEN 1 ELSE 0 END AS available FROM App\Entity\Software s
        JOIN s.casinos c
        WHERE c=:casino 
        ");
        $query->setParameter('casino',$casino->getId());
        $query->setParameter('country',$country->getId());
        $query->setFirstResult($first);
        $query->setMaxResults($max);
        return $query->getResult('SoftwareHydrator');

    }

}
