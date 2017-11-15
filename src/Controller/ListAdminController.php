<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 14:32
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

require_once '../vue/PublicList.php';

class ListAdminController {
    private $admin_list;

    public function __construct()
    {
        $this->admin_list = new BilletManager();
    }

    // Affiche la liste des billets du blog version admin
    public function admin_list()
    {
        $billets_admin = $this->admin_list->getList();
        $vue = new Vue("Read");
    }
}