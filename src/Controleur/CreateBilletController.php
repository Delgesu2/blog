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
    private $create_billet;

    public function __construct()
    {
        $this->create_billet = new BilletManager();
    }

    public function CreatePost()
    {
        $new_billet = $this->create_billet->create();
        $vue = new Vue("");
    }
}