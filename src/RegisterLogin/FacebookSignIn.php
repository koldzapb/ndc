<?php

namespace App\RegisterLogin;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Symfony\Component\HttpFoundation\RequestStack;

class FacebookSignIn implements SocialInterface
{

    private $fb_app_id;
    private $fb_app_secret;
    private $fb_redirect_uri;
    private $entityManager;
    private $requestStack;


    public function __construct($facebookAppId,$facebookAppSecret,$facebookRedirectUri,EntityManagerInterface $entityManager,RequestStack $requestStack)
    {
        $this->fb_app_id=$facebookAppId;
        $this->fb_app_secret=$facebookAppSecret;
        $this->fb_redirect_uri=$facebookRedirectUri;
        $this->entityManager=$entityManager;
        $this->requestStack=$requestStack;
    }

    public function authenticate()
    {
        try {
            $fb = new Facebook([
                'app_id' => $this->fb_app_id,
                'app_secret' => $this->fb_app_secret,
                'default_graph_version' => 'v3.0',
            ]);
        } catch (FacebookSDKException $e) {
            return false;
        }
        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch (FacebookSDKException $e) {
            return false;
        }
        if (! isset($accessToken)) {


            return false;
        }
        $oAuth2Client = $fb->getOAuth2Client();
        if (! $accessToken->isLongLived()) {

            try {
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (FacebookSDKException $e) {
                return false;
            }


        }
        try {
            $response = $fb->get('/me?fields=id,first_name,email', $accessToken);
        } catch (FacebookSDKException $e) {
            return false;
        }
        try {
            $userData = $response->getGraphNode()->asArray();
        } catch (FacebookSDKException $e) {
            return false;
        }
        $user=$this->entityManager->getRepository(User::class)->findOneBy(['email'=>$userData['email']]);
        if(!($user instanceof User))
        {
            $user=$this->entityManager->getRepository(User::class)->findOneBy(['fb_token'=>$userData['id']]);

        }
        if($user) return $user;

        $loggedUser=new User();
        $loggedUser->setEmail($userData['email']);
        $loggedUser->setUsername($userData['first_name']);
        $loggedUser->setTimejoined(new \DateTime());
        $loggedUser->setFbToken($userData['id']);
        $loggedUser->setIsActive(true);
        $loggedUser->setRegisterIp($this->requestStack->getCurrentRequest()->getClientIp());
        $this->entityManager->persist($loggedUser);
        $this->entityManager->flush();
        return $loggedUser;


    }


}