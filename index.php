<?php
require_once 'vendor/autoload.php';

use \Phroute\Phroute\RouteCollector;
use \Phroute\Phroute\RouteParser;
use Phroute\Phroute\Dispatcher;
use \Phroute\Phroute\Exception\HttpRouteNotFoundException;
use \Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Illuminate\Database\Capsule\Manager as DB;

require_once __DIR__ . '/config/database.php';
$router = new RouteCollector(new RouteParser());
require_once __DIR__ . '/routes/web.php';
$dispatcher = new Dispatcher($router->getData());

try {
	 $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'] , parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH));
} catch (HttpRouteNotFoundException $e) {
	 view('errors/404');
} catch (HttpMethodNotAllowedException $e) {
	 view('errors/503');
}
echo $response;