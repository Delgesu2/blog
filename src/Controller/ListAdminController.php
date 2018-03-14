<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 25/09/17
 * Time: 14:32
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;

class ListAdminController
{
    private $admin_list;

    public function __construct()
    {
        $this->admin_list = new BilletManager();
    }

    // Display post list in admin
    public function __invoke()
    {
        $billets_admin = $this->admin_list->getList();
        require __DIR__ . './../../templates/list.php';
    }
}