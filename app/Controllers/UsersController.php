<?php

namespace App\Controllers;

use FETECNO\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $nome = $this->model->get();
        $this->render(['nome' => $nome['nome']], 'users/index');
    }

    public function create()
    {
        return "Método create";
    }
}