<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response=$client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/'
);