<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/11/17
 * Time: 15:36
 */

namespace App;

use Framework\Controller\HomeController;

class Router
{
    private $routes = []; // Liste des routes

    public function __construct()
    {
        $this-> createRoutes();
    }

    public function createRoutes()
    {
        $routes = require __DIR__ . './../config/routes.php';

        foreach ($routes as $route) {
            $this->routes[] = new Route($route['path'], $route['controller']);

        }
    }

    public function createController($class)
    {
        return new $class();
    }

    public function handleRequest($request)
    {
        foreach ($this->routes as $route) {
            var_dump(new \ReflectionClass($route));
            switch ($_SERVER['REQUEST_URI']) {
                case $route->getPath():
                    echo "Hello !";
                  $class = $this->createController($route->getController());
                  $rf = new \ReflectionClass($class);
                    var_dump($rf->getMethod('index'));
                    var_dump($class->index());
                    break;
            }
        }
    }
}