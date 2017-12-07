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
        $loader = new Twig_Loader_Filesystem('../vue');
        $twig = new Twig_Environment($loader, array('debug' => true));
        echo $twig->render('accueil.html.twig');
    }
}