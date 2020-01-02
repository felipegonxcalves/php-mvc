<?php

require __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';

$object = $router->handler();

$controller = new $object['controller']; // Instacia o Objeto, Esse Object é o nome da class: Ex: App\Controllers\UsersController::class
$action = $object['action'];
echo $controller->$action();