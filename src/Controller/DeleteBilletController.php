<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 15:34
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class DeleteBilletController extends AbstractController
{
    private $delete_billet;

    public function __construct()
    {
        $this->delete_billet = new BilletManager();
    }


    public function action()
    {
        $suppress_billet = $this->delete_billet->erase_billet();
        require __DIR__ . './../../templates/list.php';
    }
}
