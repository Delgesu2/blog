<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 30/09/17
 * Time: 11:40
 */

namespace Framework\Controller;

use Framework\Manager\UserManager;

class UserController extends AbstractController
{
    public function profileAction ($id)
    {
        $manager = new UserManager();
        $user = $manager->getUser($id);
        $this->generer('templates', ['user'=>$user]);
    }
}