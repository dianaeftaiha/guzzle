<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$promises[]=$client->requestAsync(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/1'
);

$promises[]=$client->requestAsync(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/2'
);

$results= GuzzleHttp\Promise\settle($promises)->wait();

foreach($results as $result){
    echo $result['value']->getBody();
}