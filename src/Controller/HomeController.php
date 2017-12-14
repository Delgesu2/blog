<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 20/09/17
 * Time: 14:38
 */

namespace Framework\Controller;

class HomeController extends AbstractController
{
    public function index()
    {
        require __DIR__ . './../../vue/accueil.php';
    }

    public function __invoke()
    {
        echo $this->getTwig()->render("accueil.html.twig");
        var_dump($this->getTwig()->render("accueil.html.twig"));
    }
}
