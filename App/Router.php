<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/11/17
 * Time: 15:36
 */

namespace App;

// use Framework\Controller\HomeController;

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
            $routeRegex = $this->toRegex($route->getPath());
            //switch ($_SERVER['REQUEST_URI']) {
              //  case $route->getPath():
            if (preg_match($routeRegex, $request, $params)) {
                  $class = $this->createController($route->getController());
                  return $class->action(...array_slice($params, 1));
                  //$class->action();
                    //break;
            } else {
                return null;
            }
        }
    }


    /**
     * @param $path Route path
     * @return string Regex to match requested URL
     */
    protected function toRegex($path)
    {
        $route = preg_replace('/\{[a-zA-Z_]+\}/', '([a-z-]*)', $path);
        $route = preg_replace('/\{[a-zA-A_]+:([^}]+)\}/', '(\1)', $route);

        return '#'.$route.'#A';
    }

}