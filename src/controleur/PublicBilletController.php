<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 19:38
 */

require_once '../manager/Modele.php';
require_once '../manager/Billet.php';
require_once '../vue/PublicList.php';

class PublicBilletController {

    private $billet;

    private function __construct()
    {
        $this->billet = new Billet();
    }

    // Affiche les détails sur le billet
    public function billet($idBillet)
    {
        $billet = $this->billet->getBillets($idBillet);
        $vue = new Vue("");

    }

}