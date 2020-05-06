<?php
namespace App\SocialRegister;


use Abraham\TwitterOAuth\TwitterOAuth;
use Abraham\TwitterOAuth\TwitterOAuthException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Symfony\Component\HttpFoundation\Session\Session;


class SocialRegister
{
    private $consumerkey;
    private $consumersecret;
    private $oauthcallback;
    private $fb;
    private $connection;
    private $authUrl;
    private $loginUrl;

    private $url;
    private $fb_app_id;
    private $fb_app_secret;
    private $fb_red_uri;

    public function __construct($twitterConsumerKey,$twitterConsumerSecret,$twitterRedirectUri,$facebookAppId,$facebookAppSecret,$facebookRedirectUri)
    {
        $this->consumerkey=$twitterConsumerKey;
        $this->consumersecret=$twitterConsumerSecret;
        $this->oauthcallback=$twitterRedirectUri;



        $this->fb_app_id=$facebookAppId;
        $this->fb_app_secret=$facebookAppSecret;
        $this->fb_red_uri=$facebookRedirectUri;


        try {
            $this->fb = new Facebook([
                'app_id' => $this->fb_app_id,
                'app_secret' => $this->fb_app_secret,
                'default_graph_version' => 'v3.0',

            ]);

        } catch (FacebookSDKException $e) {
        }

        if(!$this->fb instanceof Facebook) return false;



        $this->connection=new TwitterOAuth($this->consumerkey,$this->consumersecret);

    }


    public function createLinks()
    {
        $session=new Session();




        if ($this->fb instanceof Facebook) {
            $helper=$this->fb->getRedirectLoginHelper();
            $permissions = ['email'];
            $this->loginUrl = $helper->getLoginUrl($this->fb_red_uri, $permissions);

        }


        if ($this->connection instanceof TwitterOAuth) {
            try {
                $request_token = $this->connection->oauth('oauth/request_token', array('oauth_callback' => $this->oauthcallback));
                $session->set('oauth_token',$request_token['oauth_token']);
                $session->set('oauth_token_secret',$request_token['oauth_token_secret']);
                $this->url = $this->connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));
            } catch (TwitterOAuthException $e) {
            }
        }
    }







    /**
     * @return mixed
     */
    public function getAuthUrl()
    {
        return $this->authUrl;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }


    /**
     * @return mixed
     */
    public function getFbLoginUrl()
    {
        return htmlspecialchars($this->loginUrl);
    }
}