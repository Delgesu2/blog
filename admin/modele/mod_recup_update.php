<?php

require ('../../modele/connect.php');

$req = $bdd->prepare('SELECT id, titre, chapo, contenu FROM post WHERE id =:id');
$req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$req->execute();
$data=$req->fetch(PDO::FETCH_ASSOC);