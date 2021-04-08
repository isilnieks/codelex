<?php

require '../vendor/autoload.php';

use App\Controllers\HomeController;
use App\Repositories\Persons\PersonRepository;
use App\Repositories\Persons\MySQLPersonsRepository;
use App\Services\StorePersonService;


$container = new League\Container\Container;

$container->add(PersonRepository::class, MySQLPersonsRepository::class);
$container->add(StorePersonService::class, StorePersonService::class)
    ->addArgument(PersonRepository::class);
$container->add(HomeController::class, HomeController::class)
    ->addArgument(StorePersonService::class);


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'index']);
    $r->addRoute('GET', '/person', [HomeController::class, 'searchView']);
    $r->addRoute('POST', '/searchResult', [HomeController::class, 'search']);
    $r->addRoute('GET', '/login', [HomeController::class, 'login']);
    $r->addRoute('POST', '/login', [HomeController::class, 'loginSuccess']);
    $r->addRoute('GET', '/addPerson', [HomeController::class, 'addView']);
    $r->addRoute('POST', '/addPerson', [HomeController::class, 'addPerson']);
    $r->addRoute('GET', '/deletePerson', [HomeController::class, 'deleteView']);
    $r->addRoute('POST', '/deletePerson', [HomeController::class, 'deletePerson']);
    $r->addRoute('GET', '/editPerson', [HomeController::class, 'editView']);
    $r->addRoute('POST', '/editPerson', [HomeController::class, 'editPerson']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        [$controller, $method] = $handler;
        echo ($container->get($controller))->$method($vars);
        break;
}

