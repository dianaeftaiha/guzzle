<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);

$response=$client->get(
    'posts/1'
);

// var_dump($response);
echo "<br>----------------<br>".$response->getBody();

$response=$client->get(
    'posts/2'
);

// var_dump($response);
echo "<br>----------------<br>".$response->getBody();

$response=$client->get(
    'comments/1'
);

// var_dump($response);
echo "<br>----------------<br>".$response->getBody();

$response=$client->get(
    'http://httpbin.org/ip'
);

// var_dump($response);
echo "<br>----------------<br>".$response->getBody();

