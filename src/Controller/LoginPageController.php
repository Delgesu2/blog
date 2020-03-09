<?php

namespace Framework\Controller;

class LoginPageController
{
    public function __invoke()
    {
        require '../templates/login.php';
    }
}