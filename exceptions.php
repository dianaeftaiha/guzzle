<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

try{
    $response=$client->request(
        'GET',
        // 'https://jsonplaceholder.typicode.com/posts/bar',
        'https://httpbin.org/status/503'
    );
    var_dump($response);
    echo $response->getBody();
} catch(\GuzzleHttp\Exception\ClientException $e){
    echo $e->getCode()."\n";
    echo $e->getMessage()."\n";
}catch(\GuzzleHttp\Exception\ServerException $e){
    echo $e->getCode()."\n";
    echo $e->getMessage()."\n";
}

