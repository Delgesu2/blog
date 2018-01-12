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

    private $form;
    private $create_billet;

    /**public function __construct()
    {
        $this->create_billet = new BilletManager();
        $this->form = new CreatePost();
    }**/


    public function display()
    {
        //$billet = new Post();
       // $BDD_billet = $this->create_billet->create();
        require __DIR__ . './../../templates/create.php';
    }
}