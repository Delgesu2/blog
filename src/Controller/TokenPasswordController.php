<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 03/03/18
 * Time: 21:15
 */

namespace Framework\Controller;

use Framework\Manager\TokenManager;

class TokenPasswordController
{
    private $tokendb;

    public function __construct()
    {
        $this->tokendb = new TokenManager();
    }

    public function __invoke()
    {
        $dbtoken = $this->tokendb->readToken();
        var_dump($dbtoken);
        var_dump($_SERVER);
    }
}