<?php
namespace App\ElasticSearch;


use Elasticsearch\ClientBuilder;

class ElasticSearch
{
    public $client;

    public function __construct($elasticsearchServer)
    {
        $hosts = [$elasticsearchServer];
        $this->client = ClientBuilder::create()->setHosts($hosts)->build();
    }





    public function insertCasino($id,$casinoname)
    {
        $this->client->index([
                'index'=>'ndc_casinos_all',
                'type'=>'casino',
                'id'=>$id,
                'body'=>[
                    'id'=>$id,
                    'casinoname'=>$casinoname


                ]
            ]
        );
    }


    public function searchForCasinos($q)
    {
        $params = [
            'index' => 'ndc_casinos_all',
            'body' => [
                'query'=>[

                    'match_phrase_prefix'=>[
                        'casinoname'=>$q


                    ]
                ],


            ]
        ];
        $query=$this->client->search($params);
        return $query;



    }


}