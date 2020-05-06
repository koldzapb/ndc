<?php

namespace App\Repository;

use App\Entity\CasinoBanking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CasinoBankingRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(RegistryInterface $registry,EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, CasinoBanking::class);
        $this->entityManager=$entityManager;
    }

   public function deleteAll()
   {
       $sql="DELETE FROM casino_banking";
       $stmt=$this->entityManager->getConnection()->prepare($sql);
       $stmt->execute();
   }
}
