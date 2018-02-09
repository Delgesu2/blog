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
    private $billetManager;

    public function __construct()
    {
        $this->billetManager = new BilletManager();
    }

    // Récupération du billet et modification dans la templates
    public function action($id)
    {
        $billet_recup = $this->billetManager->recup_update($id);
        $update_billet = $this->billetManager->modif($id);
        require __DIR__ . './../../templates/update.php';
    }

}