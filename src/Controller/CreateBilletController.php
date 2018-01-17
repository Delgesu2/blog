<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/10/17
 * Time: 18:51
 */

namespace Framework\Controller;

//use Framework\Modele\Post;
use Framework\Manager\BilletManager;
use Framework\Form\CreatePost;

class CreateBilletController extends AbstractController
{
    public function action()
    {
       require __DIR__ . './../../templates/create.php';
    }
}