<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/10/17
 * Time: 18:51
 */

namespace Framework\Controller;


use Framework\Form\CreatePost;
use Framework\Manager\BilletManager;
use Framework\Modele\Post;

class CreateBilletController
{
    private $form;
    private $create_billet;

    public function __construct()
    {
        $this->create_billet = new BilletManager();
        $this->form = new CreatePost();
    }

    public function CreatePost()
    {
        $billet = new Post();
        $BDD_billet = $this->create_billet->create();
        $vue = new Vue("Create");
    }
}