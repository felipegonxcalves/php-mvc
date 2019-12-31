<?php

namespace FETECNO;

class Router implements \ArrayAccess
{
    // ArrayAccess é uma Interface do PHP
    private $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function offsetExists($offset)
    {
        // É EXECUTADO QUANDO VERIFICA QUANDO UM DETERMINADO ITEM DO NOSSO ARRAY EXISTE
        return isset($this->routes[$offset]);
    }

    public function offsetGet($offset)
    {
        // TENTO BUSCAR UM DADO DENTRO DA CLASS ROUTER
        return $this->routes[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // QUANDO TENTO ADICIONAR UM VALOR
        $this->routes[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        //QUANDO QUERO REMOVER DETERMINADO ITEM
        unset($this->routes[$offset]);
    }
}
