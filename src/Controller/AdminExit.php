<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 12/01/18
 * Time: 11:09
 */

namespace Framework\Controller;


class AdminExit
{
    public function action()
    {
        session_destroy();
        header('Location:/');
    }
}