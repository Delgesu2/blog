<?php

require 'vendor/autoload.php';

$router = new App\Router($_SERVER['REQUEST_URI']); // Récupère l'URL demandée au serveur


