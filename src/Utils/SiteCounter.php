<?php
namespace App\Utils;




use App\Entity\SiteVisits;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class SiteCounter
{

    private $userIp;
    private $entityManager;

    public function __construct(RequestStack $requestStack,EntityManagerInterface $entityManager)
    {
        $this->userIp=$requestStack->getCurrentRequest()->getClientIp();
        $this->entityManager=$entityManager;
    }


    public function addVisit($user)
    {
        $visit=new SiteVisits();
        if($user instanceof User)
        {
            $visit->setUsername($user->getUsername());
        }
        $visit->setIpAddress($this->userIp);
        $this->entityManager->persist($visit);
        $this->entityManager->flush();

    }
}