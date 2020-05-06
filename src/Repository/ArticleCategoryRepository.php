<?php

namespace App\Repository;

use App\Entity\ArticleCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ArticleCategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ArticleCategory::class);
    }

    public function getCategoriesWhichHaveAssignedArticles()
    {
        return $this->createQueryBuilder('ac')
                    ->select('ac.slug,ac.name')
                    ->join('ac.news','n')
                    ->groupBy('ac.id')
                    ->getQuery()
                    ->getResult();
    }
}
