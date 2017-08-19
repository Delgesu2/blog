<?php

$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '',
    array(PDO::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION));