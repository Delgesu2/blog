<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 16:05
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class ModifBilletController {
    private $modif_billet;

    public function __construct()
    {
        $this->modif_billet = new BilletManager();
    }

    // Modification du billet
    public function modif_billet()
    {
        $modif_billet = $this->modif_billet->modif();
        $vue = new Vue("");
    }
}