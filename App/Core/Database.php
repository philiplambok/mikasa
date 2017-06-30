<?php
namespace App\Core;
use \PDO;

class Database
{
	public $db;
	private $host 	= 'localhost';
	private $dbname = 'realpidb';
	private $user	= 'root';
	private $pass	= 'root';

	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo "error: $e->getMessage()";
			die();
		}
	}
}

?>
