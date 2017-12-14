<?php

namespace App;

trait TwigTrait
{
        public function getTwig(){
        $directory = require __DIR__ . './../config/config.php';
        $loader = new \Twig_Loader_Filesystem($directory['templates_folder']);
        return new \Twig_Environment($loader);
    }
}