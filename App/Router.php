<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/11/17
 * Time: 15:36
 */

namespace App;

//use Framework\Controller\HomeController;

class Router
{
    private $routes = []; // Liste des routes dans un tableau

    public function __construct()
    {
        $this-> createRoutes();
    }

    public function createRoutes()  // On remplit le tableau
    {
       $routes = require __DIR__ . './../config/routes.php';

        foreach ($routes as $route) {
            $this->routes[] = new Route($route['path'], $route['controller'],
                             $route['requirements'] ?? '#^[a-zA-Z0-9]+#');
        }
    }

    public function createController($class)
    {
        return new $class();
    }

    public function handleRequest($request)
    {
        foreach ($this->routes as $route) {
            if (preg_match($route->getRequirements(), $request, $id)) {
                $trimmed =  trim($id[0], '/');
                $regex = '#:id#';
                preg_replace($regex, $trimmed, $route->getPath());

                $class = $this->createController($route->getController());
                $class->action((int) $id[0]);
            }

           elseif ($route->getPath() === $request) {
            $class = $this->createController($route->getController());
            $class->action();
            }

            }

    }
}
