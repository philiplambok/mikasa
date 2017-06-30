<?php 

namespace App\Controllers;
use App\Core\Controller;
use App\Lib;

class HomeController extends Controller 
{

	public function __construct()
	{
		$this->load('Config');
	}	

	public function index()
	{
		return $this->view('welcome');
	}
}