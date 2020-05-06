<?php

namespace App\Repository;

use App\Entity\ArticleCategory;
use App\Entity\News;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class NewsRepository extends ServiceEntityRepository
{

    private $em;

    public function __construct(RegistryInterface $registry,EntityManagerInterface $em)
    {
        parent::__construct($registry, News::class);
        $this->em=$em;
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('n')
            ->where('n.something = :value')->setParameter('value', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function getAllNews($first)
    {
        $query=$this->em->createQuery("
        Select n FROM App\Entity\News n
        WHERE n.live=true
        ORDER BY n.timeadded DESC 
        
        ");
        $query->setFirstResult($first);
        $query->setMaxResults(10);
        return $query->getResult();
    }

    public function totalNumber()
    {
        $query=$this->em->createQuery("
        Select count(n) FROM App\Entity\News n
        WHERE n.live=true
        ");
        return $query->getSingleScalarResult();
    }


    public function getNewsByCategory(ArticleCategory $category)
    {
        $query=$this->em->createQuery("
       SELECT n FROM  App\Entity\News n
       WHERE n.category = :category
       AND n.live=true
       ORDER BY n.timeadded DESC 
       ");
        $query->setParameter("category",$category->getId());
        return $query->getResult();

    }
}
