<?php

namespace vendor\core\base;

abstract class BaseController
{
    public $route = []; // Текущий маршрут. @var array.
    public $view;       // Текущий вид. @var string.
    public $layout;
    public $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
//        include_once APP . "/views/{$route['controller']}/{$route['action']}.php";
    }

    public function getView(){
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars){
        $this->vars = $vars;
    }
}