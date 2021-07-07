<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response=$client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);
$body = $response->getBody();
$string=$body->getContents();
$json=json_decode($string);

$response=$client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/users/'.$json->userId
);


print_r(json_decode($response->getBody()));
echo "\n*****\n";
var_dump(json_decode($response->getBody()));

echo $response->getStatusCode();
echo $response->getReasonPhrase();