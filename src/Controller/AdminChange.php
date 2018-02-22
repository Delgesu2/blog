<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 15/01/18
 * Time: 21:07
 */

namespace Framework\Controller;


class AdminChange
{
    public function __invoke()
    {
        require __DIR__ . './../../templates/update_user.php';
    }
}
