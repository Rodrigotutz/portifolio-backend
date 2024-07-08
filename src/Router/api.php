<?php

use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"));
$router->namespace("App\Controllers");

$router->group('oops');
$router->get('/erro/{errcode}', "Error:index", "error.index");

$router->dispatch();

if($router->error()) {
    $router->redirect("error.index", [
        "errcode" => $router->error()
    ]);
}