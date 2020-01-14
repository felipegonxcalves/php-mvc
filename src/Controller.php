<?php

namespace FETECNO;


class Controller
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    protected function render(array $data = [], string $view = null)
    {
        if (!$view) {
            $view = $this->controllerName() . '/' .debug_backtrace()[1]['function'];
        }

        extract($data); //Método extract pega uma chave do Array e cria uma variável com o nome da chave
        require __DIR__ . '/../template/' . $view . '.tpl.php';
    }

    private function controllerName()
    {
        $class = get_class($this); // Retorna o nome da class instanciada
        $class = explode('\\', $class); // Pega onde tem barras e transforma no Array
        $class = array_pop($class); // Pego o último item do array
        $class = preg_replace('/Controller$/', '', $class); //Remove a palavra controller do final
        return strtolower($class); // Retorna a palavra toda minúscula
    }
}