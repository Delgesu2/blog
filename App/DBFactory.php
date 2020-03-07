<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 11/12/17
 * Time: 18:14
 */

namespace App;

abstract class DBFactory
{
    protected function connect()
    {
        // Read data array
        $data = require __DIR__ . './../config/connect.php';

         return new \PDO('mysql:host=' . $data['host'] . ';dbname=' . $data['dbname'] . ';charset=utf8',
             $data['username'], $data['password'],
         array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
    }
}
