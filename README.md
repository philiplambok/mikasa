# Mikasa Framework
[![Packagist](https://img.shields.io/packagist/dt/kokororin/kotori-php.svg?maxAge=2592000)](https://packagist.org/packages/kokororin/kotori-php)
[![License](https://img.shields.io/badge/license-Apache%202-blue.svg)](https://github.com/kokororin/Kotori.php/blob/master/LICENSE)

Mikasa Framework is A Simple MVC(Model View Controller) PHP Framework. Mikasa Framework is suitable with you who familiar with CodeIgniter or just new in this pattern. 

## Installation
You need to install xampp with >= php 5.6 and composer. The installation we have to option, you can just download or clone this repo.
```
$ git clone https://github.com/philiplambok/mikasa.git
$ cd mikasa
```
or you can install with composer **[Recomended]**
```
$ composer create-project philiplambok/mikasa myapp --prefer-dist
$ cd myapp
```

## Usage
In MVC Pattern, you will familliar with Model (Class that interact with database), View (File that handle the UI) and Controller (Class that manage the logic and routing).

You can run the project using build in php server, with type this command :
```
$ myapp> php -S localhost:8000
```
That command will be running your code in localhost port 8000. You can open your browser and type to url box : http://localhost:8000

### Controller
Here is an example of a basic controller. 
```php
<?php 

namespace App\Controllers;
use App\Core\Controller;

class HomeController extends Controller 
{
	public function index()
	{
		return $this->view('welcome');
	}
} 
```

All controller must be extends with class controller, and for using class controller you must use from namespace : `use App\Core\Controller`. Like i said first, in mikasa framework, controller will be manage the route like CodeIgniter, so on that code will be running in 'http://localhost:8000'. yeah index() method is the default method.

### Model
If your program need some logic or interact to database, you can just create the model.
```
<?php 

namespace App\Models;
use App\Core\Database;

class User extends Database
{
	public $username;

	// get all user in users table.
	public function getList()
	{
	  $sql = 'SELECT * FROM users ORDER BY id';
	  $query = $this->db->query($sql);
	  $result = $query->fetchAll(PDO::FETCH_OBJ);
	  return $result;
	}
}
```
All model will be extends with Database class. To connection with database, you can using query method in db attr: `$this->db->query("query")`.

### Views
All views located in dir : `App/Views`. You can create some html file and show them with controller. If you need some data in database you just create the model.

### Learn
Comming Soon!





