<?php

namespace App\Controllers;

use FETECNO\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $this->render(['nome' => 'Felipe Gonçalves'], 'users/index');
    }

    public function create()
    {
        return "Método create";
    }
}