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
    private $routes = []; // Roads in array

    public function __construct()
    {
        $this->createRoutes();
    }

    public function createRoutes()
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

            // if ? detected -- token verifying and put in $_GET
            elseif (preg_match('#\?token=[\d+[a-zA-Z.]+#', $request, $param)) {
                $_GET['token'] = trim($param[0], '\?token=');
                $route->setPath($request);
                $route->setController('\Framework\Controller\TokenPasswordController');

                    if ($route->getPath() === $request) {
                        $class = $this->createController($route->getController());
                        return $class();
                    }
            }

            // regular path
            elseif ($route->getPath() === $request) {
                $class = $this->createController($route->getController());
                    if (preg_match('#updatepost_action#', $request) || preg_match('#write#', $request) ||
                        preg_match('#envoi#', $request) || preg_match('#check#', $request) ||
                        preg_match('#pswrd_reset_action#', $request)
                    ) {
                        return $class->action();
                    } else {
                        return $class();
                    }
            }
        }

        header('Location:/404');
    }
}



