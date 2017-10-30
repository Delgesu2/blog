<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 27/10/17
 * Time: 19:27
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class UpdateBilletController
{
    private $recup_billet;
    private $modif_billet;

    public function __construct()
    {
        $this->recup_billet = new BilletManager();
        $this->modif_billet = new BilletManager();
    }

    // Récupération du billet et modification dans la vue
    public function update_billet()
    {
        $billet = new Post();
        $billet_recup = $this->recup_billet->recup_update();
        $update_billet = $this->modif_billet->modif();
        $vue = new Vue();
    }

}