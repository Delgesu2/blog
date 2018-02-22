<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 18:51
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;


class ArticleListController
{
    private $liste;

    public function __construct()  // Construit l'objet BilletManager
    {
        $this->liste = new BilletManager();
    }

    public function __invoke()    // Affiche la liste des billets du blog
    {
       $billets = $this->liste->getBillets();
       require '../templates/liste_billets.php';
    }
}