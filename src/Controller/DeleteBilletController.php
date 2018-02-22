<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 15:34
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;
use Framework\Controller\ListAdminController;

class DeleteBilletController
{
    private $delete_billet;

    public function __construct()
    {
        $this->delete_billet = new BilletManager();
    }


    public function __invoke($id)
    {
        $suppress_billet = $this->delete_billet->erase_billet($id);
        header('Location:/admin/list');
    }
}
