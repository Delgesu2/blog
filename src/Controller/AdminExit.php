<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 12/01/18
 * Time: 11:09
 */

namespace Framework\Controller;


class AdminExit
{
    public function display()
    {
        require __DIR__ . './../../templates/accueil.php';
    }
}