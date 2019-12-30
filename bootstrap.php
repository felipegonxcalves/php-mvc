<?php

require __DIR__ . '/vendor/autoload.php';

$controller = new App\Controllers\UsersController;
echo $controller->handler();