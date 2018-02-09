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
            $regex = '#\\\d+#';

            if (preg_match($regex, $request, $id)) {
                preg_replace($regex,'',$request);
                $route->setPath($request);
               // $route->getPath();
                $class = $this->createController($route->getController());
                $class->action((int)$id[0]);
                }
                    else {
                        switch ($_SERVER['REQUEST_URI']) {
                            case $route->getPath():
                                $class = $this->createController($route->getController());
                                $class->action();
                                break;
                        }
                    }
        }
    }
}
