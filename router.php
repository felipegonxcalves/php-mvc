<?php

$router = new FETECNO\Router;

$router['/'] = [
    'controller' => App\Controllers\UsersController::class,
    'action' => 'index'
];

$router['/cadastrar'] = [
    'controller' => App\Controllers\UsersController::class,
    'action' => 'create'
];

return $router;
