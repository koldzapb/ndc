<?php
namespace App\Aweber;
use Deployer\Exception\Exception;

class MyApp
{
    private $consumerKey;
    private $consumerSecret;
    private$accessToken;
    private $accessSecret;
    public $application;
    private $subscribersList;

    public function __construct($awebberConsumerKey,$awebberConsumerSecret,$awebberAccessToken,$awebberAccessSecret,$subscribersList)
    {
        $this->consumerKey = $awebberConsumerKey;
        $this->consumerSecret = $awebberConsumerSecret;
        $this->accessToken = $awebberAccessToken;
        $this->accessSecret = $awebberAccessSecret;
        $this->application = new \AWeberAPI($this->consumerKey, $this->consumerSecret);
        $this->subscribersList=$subscribersList;
    }

    public function connectToAWeberAccount()
    {
        list($requestToken, $tokenSecret) = $this->application->getRequestToken('oob');

        echo "Go to this url in your browser: {$this->application->getAuthorizeUrl()}\n";
        echo 'Type code here: ';
        $code = trim(fgets(STDIN));
        $this->application->adapter->debug = true;


        $this->application->user->requestToken = $requestToken;
        $this->application->user->tokenSecret = $tokenSecret;
        $this->application->user->verifier = $code;

        list($accessToken, $accessSecret) = $this->application->getAccessToken();

        print "\n\n$accessToken \n $accessSecret\n";
        return array($accessToken, $accessSecret);

    }

    public function findSubscriber($email)
    {
        $account = $this->application->getAccount($this->accessToken, $this->accessSecret);

        $foundSubscribers = $account->findSubscribers(array('email' => $email));

        return $foundSubscribers[0];
    }

    public function findAll()
    {

        $account = $this->application->getAccount($this->accessToken, $this->accessSecret);
        $subscribers = $account->findSubscribers(array('status' => 'subscribed'));
        return $subscribers;
    }

    public function findList($listName)
    {
        $account = $this->application->getAccount($this->accessToken, $this->accessSecret);
        //print_r($account->lists);

        $foundLists = $account->lists->find(array('name' => $listName));
        //must pass an associative array to the find method

        //print_r($foundLists);

        return $foundLists[0];
    }

    public function addSubscriber($subscriber, $list)
    {
        $account = $this->application->getAccount($this->accessToken, $this->accessSecret);

        $listUrl = "/accounts/$account->id/lists/$list->id";
        $list = $account->loadFromUrl($listUrl);

        try {
            $list->subscribers->create($subscriber);
        } catch (Exception $exc) {
            //print $exc;
        }
    }

    public function deleteSubscriber($subscriber)
    {

        try {
            $subscriber->delete();

        } catch (Exception $exc) {
            //print $exc;
        }
    }

    /**
     * @return mixed
     */
    public function getSubscribersList()
    {
        return $this->subscribersList;
    }
}


