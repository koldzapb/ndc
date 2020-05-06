<?php
/**
 * Created by PhpStorm.
 * User: vlade
 * Date: 30.11.18.
 * Time: 13.33
 */

namespace App\EventListener;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginListener
{
    private $entityManager;
    private $requestStack;

    public function __construct(EntityManagerInterface $entityManager,RequestStack $requestStack)
    {
        $this->entityManager=$entityManager;
        $this->requestStack=$requestStack;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $interactiveLoginEvent)
    {

        $user=$interactiveLoginEvent->getAuthenticationToken()->getUser();
        $user->setCurrentIp($this->requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager->flush();
    }
}