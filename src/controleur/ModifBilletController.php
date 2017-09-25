<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 16:05
 */

require_once '../manager/Modele.php';
require_once '../manager/Billet.php';

class ModifBilletController {
    private $modif_billet;

    public function __construct()
    {
        $this->modif_billet = new Billet();
    }

    // Modification du billet
    public function modif_billet()
    {
        $suppr_billet = $this->modif_billet->modif();
        $vue = new Vue("");
    }
}