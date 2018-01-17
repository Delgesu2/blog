<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 12/01/18
 * Time: 13:16
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class WriteController
{
    private $write_post;

    public function __construct() // Construit l'objet BilletManager
    {
        $this->write_post = new BilletManager();
    }

    public function action()
    {
        $this->write_post->create();
        header('Location:/admin/list');
    }
}