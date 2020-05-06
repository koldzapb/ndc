<?php

namespace App\Repository;

use App\Entity\Banking;
use App\Entity\Casino;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class BankingRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,EntityManagerInterface $em)
    {
        parent::__construct($registry, Banking::class);
        $this->em=$em;

    }

   public function getBankingsForCasinoMetakeywords(Casino $casino)
   {

       $query=$this->em->createQuery("
       SELECT b FROM App\Entity\Banking b
       JOIN  b.casinos cb
       WHERE :casino = cb.casino
       AND cb.allowsdeposits=true
       ");
       $query->setParameter("casino",$casino);
       return $query->getResult();


   }

   public function getBankingsForSitemap()
   {
       $query=$this->em->createQuery("
       SELECT b FROM App\Entity\Banking b
       INNER JOIN b.casinos cb
       WHERE cb.allowsdeposits=true 
       AND cb.allowswithdrawals=true
       ");
       return $query->getResult();

   }

    public function selectNonExistingBankingMethods($existingBankingMethodsArray)
    {
        $qb = $this->createQueryBuilder('b')
            ->select()
            ->where('b.id NOT IN (:existingBankingMethods)')
            ->getQuery();
        $qb->setParameter('existingBankingMethods',$existingBankingMethodsArray);
        return $qb->getResult();
    }


}
