<?php

require ('connect.php');

if (isset($_GET['id'])) {  
    $req = $bdd->prepare('SELECT id, titre, chapo, contenu, 
    		DATE_FORMAT(date_creation, "%d/%m/%Y à %Hh%imin%ss") AS date_creation,
    		DATE_FORMAT(date_maj, "%d/%m/%Y à %Hh%imin%ss") AS date_maj
    		FROM post WHERE id = :id');
    $req->bindValue(':id', $_GET['id'], PDO::PARAM_STR);
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    }