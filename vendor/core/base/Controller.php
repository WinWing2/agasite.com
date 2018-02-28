<?php
/**
 * Created by PhpStorm.
 * User: Паша
 * Date: 20.02.2018
 * Time: 8:48
 */

namespace vendor\core\base;


abstract class Controller
{
    public $route = [];
//    public $view;

    public function __construct($route)
    {
        $this->route = $route;
//        $this->view = $route['action'];
//        include_once APP . "/views/{$route['controller']}/{$route['action']}.php";
    }
}