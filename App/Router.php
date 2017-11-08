<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/11/17
 * Time: 15:36
 */

namespace App;


class Router {
    private $url; // URL sur laquelle on veut se rendre
    private $routes = []; // Liste des routes

    public function __construct($url){
        $this-> url = $url;
    }

    public function get($path, $callable){
        $route = new Route($path, $callable);
        $this->routes["GET"][] = $route;
        return $route; // On retourne la route pour "enchainer" les méthodes
    }

}