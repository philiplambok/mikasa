<?php

namespace App\Core;

class Route
{
	public $controller = "App\Controllers\\";
	public $method = 'index';
	public $params = [];

	public function __construct()
	{
		if(!isset($_GET['url'])){
			$this->controller .= 'HomeController';
			return ;
		}

		// if url is set by user
		$url = explode('/', trim($_GET['url']));

		if(isset($url[0])){
			$this->controller .= ucfirst($url[0]).'Controller';
		}

		if(isset($url[1]) && !empty($url[1])){
			$this->method = $url[1];
		}

		if(isset($url[2]) && !empty($url[2])){
			unset($url[0]);
			unset($url[1]);
			$this->params = $url;
		}
		return ;
	}

	public function run()
	{
		if(!class_exists($this->controller)){
			require_once __DIR__ . "/../Views/Error/404.php";
			return ;
		}

		$this->controller = new $this->controller;

		if(!method_exists($this->controller, $this->method)){
			require_once __DIR__ . "/../Views/Error/404.php";
			return ;
		}

		call_user_func_array([$this->controller,$this->method], $this->params);
	}
	
}

?>
