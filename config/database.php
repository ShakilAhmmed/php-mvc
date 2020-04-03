<?php

use Illuminate\Database\Capsule\Manager as DB;

$database = new DB;

$database->addConnection([
	'driver' => 'mysql' ,
	'host' => '127.0.0.1' ,
	'database' => 'php_mvc' ,
	'username' => 'root' ,
	'password' => '' ,
	'charset' => 'utf8' ,
	'collation' => 'utf8_unicode_ci' ,
	'prefix' => '' ,
]);

// Make this Capsule instance available globally via static methods... (optional)
$database->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$database->bootEloquent();

