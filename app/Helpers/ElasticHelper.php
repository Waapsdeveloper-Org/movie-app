<?php

namespace App\Helpers;
use Elastic\Elasticsearch\ClientBuilder;

class ElasticHelper
{

    private $client;

    public function __construct()
    {
        $this->client = self::getClient();
    }


    /**
     * @return \Elastic\Elasticsearch\Client
     */
    public static function getClient()
    {
        $hosts = [
            env('ELASTICSEARCH_HOSTS')
        ];

        return ClientBuilder::create()
            ->setHosts($hosts)
            ->setApiKey(env('ELASTICSEARCH_APIKEY'))
            ->build();
    }

    /**
     * @param $index
     * @param $type
     * @param $id
     * @param $body
     * @return array
     */
    public function index($index, $type, $id, $body){
        $params = [
            'index' => $index,
            'type' => $type,
            'id' => $id,
            'body' => $body
        ];

        $result = $this->client->index($params);
        return $result->asArray();
    }

    // list of data to be index in elastic search
    public function bulkIndex($index, $type, $data){
        $params = [];
        $i = 1;
        foreach ($data as $item) {
            $params[] = $this->index($index, $type, $item['id'], $item);
            // $params['body'][] = [
            //     'index' => [
            //         '_index' => $index,
            //         '_id' => $item['id'],
            //         'name' => $item['name'],
            //         'description' => $item['description'],
            //     ]


            // ];

            // $params['body'][] = $item;
            $i++;
        }

        // $result = $this->client->bulk($params);
        return $params;
    }

    public function search($search){
        $params = [
            'index' => 'films',
            'body' => [
                'query' => [
                    'regexp' => [
                        'name' => '.*'.$search.'.*'
                    ]
                ]
            ]
        ];

        $result = $this->client->search($params);
        return $result['hits']['hits'];
    }

    public function delete($index, $type, $id){
        $params = [
            'index' => $index,
            'type' => $type,
            'id' => $id
        ];

        $result = $this->client->delete($params);
        return $result->asArray();
    }

    public function update($index, $type, $id, $body){
        $params = [
            'index' => $index,
            'type' => $type,
            'id' => $id,
            'body' => [
                'doc' => $body
            ]
        ];

        $result = $this->client->update($params);
        return $result->asArray();
    }

    public function get($index, $type, $id){
        $params = [
            'index' => $index,
            'type' => $type,
            'id' => $id
        ];

        $result = $this->client->get($params);
        return $result->asArray();
    }

    // delete all
    public function deleteAll($index){
        $params = [
            'index' => $index
        ];

        $result = $this->client->indices()->delete($params);
        return $result->asArray();
    }




}


