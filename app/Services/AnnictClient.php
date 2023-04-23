<?php

namespace App\Services;

use GuzzleHttp\Client;

class AnnictClient
{
    private $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('ANNICT_BASE_URI'),
            'headers' => [
                'Authorization' => 'Bearer ' . env('ANNICT_API_KEY')
            ]
        ]);
    }

    public function getWorks($params = [])
    {
        $response = $this->client->get('works', [
            'query' => $params
        ]);

        return json_decode($response->getBody(), true);
    }
}