<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 15:34
 */

require_once '../manager/Modele.php';
require_once '../manager/Billet.php';

class DeleteBilletController {
    private $delete_billet;

    public function __construct()
    {
        $this->delete_billet = new Billet();
    }


    public function efface_billet()
    {
        $suppress_billet = $this->delete_billet->erase_billet();
        $vue = new Vue("");
    }
}