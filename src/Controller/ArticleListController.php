<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 18:51
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;




class ArticleListController extends AbstractController
{
    private $liste;

    public function __construct()
    {
        $this->liste = new BilletManager();
    }


    // Affiche la liste des billets du blog
    public function display()
    {
        //$billets = $this->liste->getBillets();
        require __DIR__ . './../../templates/liste_billets.php';
    }
}