<?php

namespace App\Services;

use GuzzleHttp\Client;

class AnnictClient
{
    private $client;

    public function __construct()
    {
        $this->worksClient = new Client([
            'base_uri' => env('ANNICT_BASE_URI'),
            'headers' => [
                'Authorization' => 'Bearer ' . env('ANNICT_API_KEY')
            ]
        ]);
        $this->episodesClient = new Client([
            'base_uri' => env('ANNICT_BASE_URI'),
            'headers' => [
                'Authorization' => 'Bearer ' . env('ANNICT_API_KEY')
            ]
        ]);
    }

    public function getWorks($params = [])
    {
        $response = $this->worksClient->get('works', [
            'query' => $params
        ]);
        return json_decode($response->getBody(), true);
    }

    public function getEpisodes($params)
    {
        $response = $this->episodesClient->get('/v1/episodes/', [
            'query' => $params
        ]);
        return json_decode($response->getBody(), true);
    }
}