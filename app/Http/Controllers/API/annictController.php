<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class annictController extends Controller
{
    public function allView()
    {
        $url = 'https://api.annict.com/v1/works?access_token=';
        $client = new Client();
        try{
            $response = $client->request("GET", $url, [
                    'json' => [
                            'id' => 1139,
                            // 'title' => '精霊の守り人',
                            // 'title_kana' => 'せいれいのもりびと',
                            // 'media' => 'tv',
                    ]
            ]);
        } catch (ClientException $e) {
            var_dump("例外でっせ");
            var_dump($e->getRequest());
            var_dump($e->getResponse());
        }
        // echo('<pre>');
        var_dump(json_decode($response->getBody(), true));
        // echo('</pre>');
        return;
    }
}
