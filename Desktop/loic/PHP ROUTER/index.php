<?php

require_once 'vendor/autoload.php';
use App\Core\Router;

// si la clé url n'existe pas, alors création de la clé
if(!array_key_exists('url',$_GET))
{
    $_GET['url'] = "";
}

$router = new Router($_GET['url']);

// dump($router,$_SERVER);
$router->add("test/:id",function(){});

try{
    $router->run();
} catch(\App\Exception\RouterException $e){

}
