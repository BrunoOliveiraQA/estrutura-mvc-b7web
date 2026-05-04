<?php

require_once '../app/core/Router.php';

echo "Arquivo Index dentro da pasta public<br>";
echo "<hr>";


$url = $_GET['url'] ?? '';

$router = new Router();
$router->dispatch($url);



// var_dump($_GET);

// $url = isset($_GET['url']) ? $_GET['url'] : 'home/index';

// $url = explode('/', $_GET['url']);
// var_dump($url);