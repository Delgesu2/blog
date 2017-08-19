<?php

require ('connect.php');

$req=$bdd->query('SELECT identifiant, mdp FROM user WHERE id=1');
$user=$req->fetch();