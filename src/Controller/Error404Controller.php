<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 16/03/18
 * Time: 11:37
 */

namespace Framework\Controller;


class Error404Controller
{
    public function __invoke()
    {
        require __DIR__ . './../../templates/404.html';
    }
}