<?php

namespace FETECNO;


class Controller
{
    protected function render(array $data = [], string $view = null)
    {
        extract($data); //Método extract pega uma chave do Array e cria uma variável com o nome da chave
        require __DIR__ . '/../template/' . $view . '.tpl.php';
    }
}