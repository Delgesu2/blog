<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 20/09/17
 * Time: 14:38
 */

namespace Framework\Controller;

class HomeController
{

    public function __invoke()
    {
        require __DIR__ . './../../templates/accueil.php';
    }
}
