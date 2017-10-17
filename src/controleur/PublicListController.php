<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 18:51
 */

namespace Post;
require_once '../vue/PublicList.php';


class PublicListController{
    private $liste;

    public function __construct()
    {
        $this->liste = new BilletManager();
    }

    // Affiche la liste des billets du blog
    public function public_list()
    {
        $billets = $this->liste->getBillets();
        $vue = new Vue("");
    }
}