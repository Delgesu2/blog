<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 27/09/17
 * Time: 14:44
 */

namespace Framework\Controller;

use Framework\Manager\UserManager;

class UpdateUserController extends AbstractController
{
    private $userManager;

    public function __construct()
    {
        $this->userManager=new UserManager();
    }

    // Mise à jour des données User
    public function display()
    {
        $user=$this->userManager->getUser();
        $vue=new Vue;
    }
}