<?php

namespace App\RegisterLogin;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class GoogleSignIn implements SocialInterface
{

        private $userGoogleId;
        private $userGoogleName;
        private $userGoogleEmail;
        private $entityManager;
        private $requestStack;

        public function __construct(EntityManagerInterface $entityManager)
        {
            $this->entityManager=$entityManager;
        }

        public function authenticate()
        {


            $user=$this->entityManager->getRepository(User::class)->findOneBy(['googleid'=>$this->userGoogleId]);

            if(!($user instanceof User))
            {
                $user=$this->entityManager->getRepository(User::class)->findOneBy(['email'=>$this->userGoogleEmail]);
            }


            if($user instanceof User  ) {

                return $user;
            }


            $name=($this->userGoogleName!==null)?$this->userGoogleName:strstr($this->userGoogleEmail,'@',true);
            $user=new User();
            $user->setEmail($this->userGoogleEmail);
            $user->setUsername($name);
            try {
                $user->setTimejoined(new \DateTime());
            } catch (\Exception $e) {
            }
            $user->setGoogleid($this->userGoogleEmail);
            $user->setIsActive(true);
            $user->setRegisterIp($this->requestStack->getCurrentRequest()->getClientIp());
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            return $user;


        }




    /**
     * @param mixed $userGoogleEmail
     */
    public function setUserGoogleEmail($userGoogleEmail): void
    {
        $this->userGoogleEmail = $userGoogleEmail;
    }


    /**
     * @param mixed $userGoogleId
     */
    public function setUserGoogleId($userGoogleId): void
    {
        $this->userGoogleId = $userGoogleId;
    }

    /**
     * @param mixed $userGoogleName
     */
    public function setUserGoogleName($userGoogleName): void
    {
        $this->userGoogleName = $userGoogleName;
    }

}