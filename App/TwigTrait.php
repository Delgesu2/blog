<?php

namespace App;

trait TwigTrait
{
    public function getTwig(){
        $loader = new \Twig_Loader_Filesystem('../src/vue');
        return new \Twig_Environment($loader, array('debug' => true));
    }
}