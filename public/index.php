<?php

require '../vendor/autoload.php';

use App\Router;

$router = new Router(); // Récupère l'URL demandée au serveur

$router->handleRequest($_SERVER['REQUEST_URI']);

/** Instantiation des objets Twig  */
$loader = new Twig_Loader_Filesystem('../src/vue');
$twig = new Twig_Environment($loader, array('debug' => true));
echo $twig->render('accueil.html.twig');
