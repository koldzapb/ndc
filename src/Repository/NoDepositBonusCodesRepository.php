<?php

namespace App\Repository;

use App\Entity\NoDepositBonusCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NoDepositBonusCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoDepositBonusCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoDepositBonusCodes[]    findAll()
 * @method NoDepositBonusCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoDepositBonusCodesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NoDepositBonusCodes::class);
    }

    public function selectNonExistingCodes($existingBonusesArray)
    {

        $qb = $this->createQueryBuilder('n')
            ->select()
            ->where('n.lcb_id NOT IN (:existingbonuses)')
            ->getQuery();
        $qb->setParameter('existingbonuses',$existingBonusesArray);
        return $qb->getResult();

    }
}
