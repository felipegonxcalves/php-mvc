<?php

$router = new FETECNO\Router;

$router['/'] = [
    'controller' => App\Controllers\UsersController::class,
    'action' => 'index'
];

return $router;
