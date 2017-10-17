<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 15:34
 */

namespace Post;

class DeleteBilletController {
    private $delete_billet;

    public function __construct()
    {
        $this->delete_billet = new BilletManager();
    }


    public function efface_billet()
    {
        $suppress_billet = $this->delete_billet->erase_billet();
        $vue = new Vue("");
    }
}
