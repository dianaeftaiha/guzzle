<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response=$client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);
$headers = $response->getHeaders();

foreach($headers as $k=>$v){
    echo "{$k}: ".implode(', ', $v)."\n";
}

$type=$response->getHeader('Content-Type');
if(in_array('application/json; charset=utf-8', $type)){
    $body=json_decode($response->getBody());
}else {
    $body=$response->getBody();
}
print_r($body);