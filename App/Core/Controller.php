<?php

namespace App\Core;

class Controller
{

	public $model;

	public function model($name)
	{
		$this->model = 'App\Models\\'. $name;
		return new $this->model;
	}

	public function view($name,$data = [])
	{
		require_once __DIR__ . '/../Views/'.$name.'.php';
	}

	public function load($name)
	{
		require_once __DIR__ . '/../Lib/'.$name.'.php';
		return ;
	}
}

?>
