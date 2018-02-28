<?php

namespace vendor\core;

use function vendor\libs\debug;

class Router
{
	protected static 
		$routes = [],
		$route = [];
	
	// Гетеры, сетеры.
	public static function getRoutes() {return self::$routes;}
	public static function getRoute() {return self::$route;}

	// Массив массивов routes(regexp=>route(controller=>action))
	// add заполняет routes regexp'ами.
	public static function add($regexp, $route = []) {
		self::$routes[$regexp] = $route;
	}	

	// Сравнивает вводимый uri с regexp'ами, если данные подходят, добавляет
	// их в route(key=>value), таким образом создаём из uri route'ы, понятные
	// программе.
	protected static function matchRoute($uri){
		foreach (self::$routes as $pattern => $route) {
			if (preg_match("#$pattern#", $uri, $matches)) {
				foreach ($matches as $k => $v) {
					if(is_string($k)) {
						$route[$k] = $v;
					}
				}
				if(!isset($route['action'])){
					$route['action'] = 'index';
				}
				self::$route = $route;
				return true;
			}			
		}
		return false;
	}

// Перенаправляет пользователя по маршруту uri, чтот тот ввёл.
	public static function dispetch($uri){
		if(self::matchRoute($uri)) {
			$controller = 'app\\controllers\\' . self::toUpperCamelCase(self::$route['controller']);
			if(class_exists($controller)){
				$cObj = new $controller(self::$route);
				$action = self::toLowerCamelCase(self::$route['action']) . 'Action';
				if(method_exists($cObj, $action)){
					$cObj->$action();
				}else echo "Метод $controller::$action не найден<br>";
			}else echo "Контроллер <b>$controller</b> не найден<br>";
		}else {
			http_response_code(404);
			include "../public/404.html";
		}
	}

	protected static function toUpperCamelCase ($name){
		$name = str_replace('-', ' ', $name);
		$name = ucwords($name);
		$name = str_replace(' ', '', $name);
		return $name;
	}

	protected static function toLowerCamelCase ($name){
		$name = lcfirst(self::toUpperCamelCase($name));
		return $name;
	}
}