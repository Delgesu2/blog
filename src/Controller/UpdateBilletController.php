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
    private $billetManager;

    public function __construct()
    {
        $this->billetManager = new BilletManager();
    }

    // Recover post in form
    public function __invoke($id)
    {
        $billet_recup = $this->billetManager->recup_update($id);
        require __DIR__ . './../../templates/update.php';
    }

    // Update in DB
    public function action()
    {
        $update_billet = $this->billetManager->modif();
        header('Location:/admin/list');
    }
}