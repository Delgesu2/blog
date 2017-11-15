<?php

require '../vendor/autoload.php';

use App\Router;

$router = new Router(); // Récupère l'URL demandée au serveur

$router->handleRequest($_SERVER['REQUEST_URI']);
