<?php

require 'vendor/autoload.php';

$router = new \App\Router(); // Récupère l'URL demandée au serveur

$router->handleRequest($_SERVER['REQUEST_URI']);
