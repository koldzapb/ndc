<?php

namespace App\RegisterLogin;




use App\Encoders\SaltMaker;
use App\Entity\User;
use App\Mailer\Mailer;
use Doctrine\ORM\EntityManagerInterface;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserRegister
{
    private $entityManager;
    private $encoder;
    private $saltMaker;
    /*** @var User */
    private $user;
    private $mailer;
    private $requestStack;

    public function __construct(EntityManagerInterface $entityManager,UserPasswordEncoderInterface $userPasswordEncoder,SaltMaker $saltMaker,Mailer $mailer,RequestStack $requestStack)
    {
        $this->entityManager=$entityManager;
        $this->encoder=$userPasswordEncoder;
        $this->saltMaker=$saltMaker;
        $this->mailer=$mailer;
        $this->requestStack=$requestStack;


    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function register()
    {
        $salt=$this->saltMaker->makeSalt();
        $password = $this->encoder->encodePassword($this->user, $this->user->getPlainPassword().'NDCkjubyt754hjkgffdsgghasfhjdsfl'.$salt,$salt);
        $token=Uuid::uuid4()->toString();
        $this->user->setToken($token);
        $this->user->setPassword($password);
        $this->user->setSalt($salt);
        $this->user->setRegisterIp($this->requestStack->getCurrentRequest()->getClientIp());
        $this->user->setCurrentIp($this->requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager->persist($this->user);
        $this->entityManager->flush();
        $this->mailer->sendRegistrationEmail($this->user);
        return '<span class="success">Sucessfully registered,confirmation mail sent</span>';
    }



}