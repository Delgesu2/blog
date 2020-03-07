<?php
session_start();
require '../vendor/autoload.php';

use App\Router;

/* Collect URL */
$router = new Router(); 

$router->handleRequest($_SERVER['REQUEST_URI']);
