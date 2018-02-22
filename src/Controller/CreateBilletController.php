<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/10/17
 * Time: 18:51
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class CreateBilletController
{
    private $create;

    public function __construct()
    {
        $this->create = new BilletManager();
    }

    // Appel du template de formulaire
    public function __invoke()
    {
       require __DIR__ . './../../templates/create.php';
    }

    // Create in DB
    public function action()
    {
        $this->create->create();
        header('Location:/admin/list');
    }

}