<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 17:31
 */

namespace Post;

class RecupModifController {
    private $recup_billet;

    public function __construct()
    {
        $this->recup_billet = new BilletManager();
    }

    // Récupération du billet à modifier
    public function ramasse_billet()
    {
        $billet = $this->recup_billet->recup_update();
        $vue = new Vue("");
    }
}
