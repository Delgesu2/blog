<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/11/17
 * Time: 15:36
 */

namespace App;


class Router
{
    private $routes = []; // Liste des routes

    public function __construct()
    {
        $this-> createRoutes();
    }

    public function createRoutes()
    {
        $routes = require __DIR__ . '/routes.php';

        foreach ($routes as $route) {
            $route = new Route($route['path'], $route['controller']);
            $this->routes[] = $route;
        }
    }

    public function handleRequest($request)
    {
        foreach ($this->routes as $route) {
            if ($route->getPath() === $request) {
                $controller = new $route->getController();
                return $controller->indexAction;
            }

            echo '404 page not found';
        }
    }

}