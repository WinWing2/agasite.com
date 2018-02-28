<?php

error_reporting(-1);

use vendor\core\Router;

// Немного констант для ориентирования
define('ROOT', dirname(__DIR__));
define('WWW', __DIR__);
define('APP', dirname(__DIR__) . '/app');
define('CORE', dirname(__DIR__) . 'vendor/core');

// автозагрузка
spl_autoload_register(function($class){
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    	if(is_file($file)){
		require_once $file;
	}
});
// доп.загрузка
require_once '../vendor/libs/functions.php';

Router::add('^/page/(?P<action>[a-zA-Z-]+)/?(?P<alias>[a-zA-Z-]+)*$', ['controller' => 'Page']);
// Добавляем regexp'ы, лучше перенести это в static или отдельную ф-ию.
Router::add('^$', ['controller' => 'Main']);
Router::add('^/(?P<controller>[a-zA-Z-]+)/?(?P<action>[a-zA-Z-]+)*$');

// Считываем Юрия и направляем по нему пользователя.
$uri = rtrim($_SERVER['REQUEST_URI'],'/');
Router::dispetch($uri);