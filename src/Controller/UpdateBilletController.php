<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 27/10/17
 * Time: 19:27
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class UpdateBilletController extends AbstractController
{
    private $BilletManager;

    public function __construct()
    {
        $this->BilletManager = new BilletManager();
    }

    // Récupération du billet et modification dans la templates
    public function display()
    {
        $billet_recup = $this->recup_billet->recup_update('id');
        $update_billet = $this->modif_billet->modif($data);
        $vue = new Vue();
        require __DIR__ . './../../templates/update.php';
    }

}