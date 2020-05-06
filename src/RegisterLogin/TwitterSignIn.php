<?php

namespace App\RegisterLogin;


use Abraham\TwitterOAuth\TwitterOAuth;
use Abraham\TwitterOAuth\TwitterOAuthException;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TwitterSignIn implements SocialInterface
{

    private $twitterConsumerKey;
    private $twitterConsumerSecret;
    private $twitterRedirectUri;
    private $session;
    private $request;
    private $entityManager;
    private $requestStack;

        public function __construct($twitterConsumerKey,$twitterConsumerSecret,$twitterRedirectUri,SessionInterface $session,EntityManagerInterface $entityManager,RequestStack $requestStack)
        {

            $this->twitterConsumerKey=$twitterConsumerKey;
            $this->twitterConsumerSecret=$twitterConsumerSecret;
            $this->twitterRedirectUri=$twitterRedirectUri;
            $this->session=$session;
            $this->entityManager=$entityManager;
            $this->requestStack=$requestStack;


        }


        public function authenticate()
        {
            define('CONSUMER_KEY', $this->twitterConsumerKey);
            define('CONSUMER_SECRET', $this->twitterConsumerSecret);
            define('OAUTH_CALLBACK', $this->twitterRedirectUri);

            $request_token = [];
            $request_token['oauth_token'] = $this->session->get('oauth_token');
            $request_token['oauth_token_secret'] = $this->session->get('oauth_token_secret');

            if(isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {

                return false;
            }

            $connection = new TwitterOAuth($this->twitterConsumerKey, $this->twitterConsumerSecret, $request_token['oauth_token'], $request_token['oauth_token_secret']);
            try {
                $access_token = $connection->oauth("oauth/access_token", ["oauth_verifier" => $_REQUEST['oauth_verifier']]);
            } catch (TwitterOAuthException $e) {

                return false;
            }

            $connection = new TwitterOAuth($this->twitterConsumerKey, $this->twitterConsumerSecret, $access_token['oauth_token'], $access_token['oauth_token_secret']);

            $user_data=$connection->get("account/verify_credentials", ['include_email' => 'true']);
            $user=$this->entityManager->getRepository(User::class)->findOneBy(['twitterid'=>$user_data->id]);
            if($user instanceof User){
                return $user;
            }

            $user=new User();
            $user->setUsername($user_data->screen_name);
            $user->setEmail($user_data->email);
            $user->setTwitterid($user_data->id);
            $user->setIsActive(true);
            $user->setTimejoined(new \DateTime());
            $user->setRegisterIp($this->requestStack->getCurrentRequest()->getClientIp());
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            return $user;

        }

        public function setRequest(Request $request)
        {
            $this->request=$request;
        }
}