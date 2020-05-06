<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ArticleRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(RegistryInterface $registry,EntityManagerInterface $em)
    {
        parent::__construct($registry, Article::class);
        $this->em=$em;
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('a')
            ->where('a.something = :value')->setParameter('value', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function getArticles($first)
    {
        $query=$this->em->createQuery("
        SELECT a FROM App\Entity\Article a
        WHERE a.live=true
        ORDER BY a.timeadded DESC 
         ");

        $query->setFirstResult($first);
        $query->setMaxResults(24);
        $paginator = new Paginator($query, $fetchJoinCollection = true);
        return $paginator;
    }

    public function getArticlesNumber()
    {
        $query=$this->em->createQuery("
        SELECT COUNT(a.id) FROM App\Entity\Article a
        ");
        return $query->getSingleScalarResult();
    }

    public function getArticlesByTags()
    {
        $query=$this->createQueryBuilder('a')
            ->select('a.id,a.tags')
            ->where('a.tags is not null')
            ->getQuery();
        return $query->getArrayResult();
    }





}
