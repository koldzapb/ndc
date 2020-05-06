<?php

namespace App\Feed;

use GuzzleHttp\Client;

class Downloader
{
    const URL_TEMPLATE ='https://lcb.org/feed/%s.json?token=%s';

    private $token;
    private $http;

    public function __construct($token)
    {
        $this->http = new Client(['defaults' => [
            'verify' => false,
            'force_ip_resolve'=>'v4'
        ]]);
        $this->token = $token;
    }

    public function fetch($feed)
    {
        $response =$this->http->get(sprintf(self::URL_TEMPLATE, $feed, $this->token));
        $data = \json_decode($response->getBody()->getContents(), true);
        return count($data) === 1 ? current($data) : $data;
    }
}