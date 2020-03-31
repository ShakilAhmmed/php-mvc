<?php
require_once 'vendor/autoload.php';

use \Phroute\Phroute\RouteCollector;
use \Phroute\Phroute\RouteParser;
use Phroute\Phroute\Dispatcher;
use \Phroute\Phroute\Exception\HttpRouteNotFoundException;
use \Phroute\Phroute\Exception\HttpMethodNotAllowedException;

$router = new RouteCollector(new RouteParser());
require_once __DIR__ . '/routes/web.php';
$dispatcher = new Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'] , parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH));
try {
	 $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'] , parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH));
} catch (HttpRouteNotFoundException $e) {
	 echo $e->getMessage();
	 die();
} catch (HttpMethodNotAllowedException $e) {
	 echo $e->getMessage();
	 die();
}
echo $response;