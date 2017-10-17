<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 30/09/17
 * Time: 11:40
 */

namespace User;
class UserController
{
    public function profileAction ($id)
    {
        $manager = new UserManager();
        $user = $manager->getUser($id);
        $this->generer('vue', ['user'=>$user]);
    }
}