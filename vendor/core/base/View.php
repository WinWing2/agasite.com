<?php

namespace vendor\core\base;

use function vendor\libs\debug;

class View {
    public $route = []; // Текущий маршрут. @var array.
    public $view;       // Текущий вид. @var string.
    public $layout;     // Текущий шаблон. @var string.

    public function __construct($route, $layout = '', $view = '' )
    {
        $this->route = $route;
        if($layout === false){
            $this->layout = false;
        }
        else {
            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;
    }

    public function render($vars){
        if(is_array($vars)){
            extract($vars);
        }
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();

        if(is_file($file_view)){
            require_once ($file_view);
        }
        else {
            echo "<p>Не найден вид {$file_view}</p>";
        }
        $content = ob_get_clean();

        if (false !== $this->layout) {
            $file_layout = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($file_layout)){
                require_once ($file_layout);
            }
            else {
                echo "<p>Не найден шаблон {$file_layout}</p>";
            }
        }
    }
}