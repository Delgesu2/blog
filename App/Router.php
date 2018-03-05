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
    private $matches = 0;

    public function __construct()
    {
        $this->createRoutes();
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

            //  if /id detected
            if (preg_match($route->getRequirements(), $request, $id)) {
                $new_id = trim($id[0], '/');
                $regex = '#:id#';
                $new_path = preg_replace($regex, $new_id, $route->getPath());
                $route->setPath($new_path);

                if ($route->getPath() === $request) {
                    $class = $this->createController($route->getController());
                    return $class($new_id);
                }
            }

            // if ? detected -- token verifying
            elseif (preg_match('#\?#', $request)) {
                $route->setPath($request);
                $route->setController('\Framework\Controller\TokenPasswordController');

                if($route->getPath() === $request) {
                    $class = $this->createController($route->getController());
                    return $class();
                }
            }

            // regular path
            elseif ($route->getPath() === $request) {
                $class = $this->createController($route->getController());
                if (preg_match('#updatepost_action#', $request) || preg_match('#write#', $request) ||
                    preg_match('#envoi#', $request) || preg_match('#check#', $request) ||
                    preg_match('#pswrd_reset_action#', $request)){
                    return $class->action();
                } else
                    return $class();
            }


            elseif ($this->getMatches() == count($this->routes) || $this->getMatches() > count($this->routes)) {
                throw new \Exception(sprintf('Route not matched'));
            }
        }
    }

    public function getMatches()
    {
        return $this->matches;
    }

    public function match(string $request, string $route)
    {
        if ($request !== $route) {
            $this->matches++;
        }
    }

}
