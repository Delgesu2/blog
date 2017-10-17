<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 19:38
 */

namespace Post;
require_once '../vue/PublicList.php';

class PublicBilletController {

    private $billet;

    public function __construct()
    {
        $this->billet = new BilletManager();
    }

    // Affiche les détails sur le billet
    public function billet($idBillet)
    {
        $billet = $this->billet->getBillets($idBillet);
        $vue = new Vue("");

    }

}