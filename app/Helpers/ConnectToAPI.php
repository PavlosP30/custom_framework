<?php

namespace app\Helpers;

use GuzzleHttp\Client;

class ConnectToAPI
{
    public function callAPI($config)
    {
        // Create a client with a base URI
        $client = new Client([
            'base_uri' => $config['url'],
            'verify' => $_ENV['PEM_PATH'],
            'apikey' => $config['api_key']
        ]);
        $response = $client->request($config['method'], $config['endpoint']);
        return json_decode($response->getBody()->getContents());
    }
}