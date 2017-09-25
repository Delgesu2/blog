<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 14:32
 */
require_once '../manager/Modele.php';
require_once '../manager/Billet.php';
require_once '../vue/PublicList.php';

class ListAdminController {
    private $admin_list;

    public function __construct()
    {
        $this->admin_list = new Billet();
    }

    // Affiche la liste des billets du blog version admin
    public function admin_list()
    {
        $billets_admin = $this->admin_list->getList();
        $vue = new Vue("");
    }
}