<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 03/08/17
 * Time: 12:50
 */

include ('connect.php');

// Requête préparée
    $req = $bdd->prepare('INSERT INTO post(titre, chapo, contenu, date_creation) VALUES (:titre, :chapo, :contenu, NOW())');
    $req->execute(array(
        'titre'=>$_POST['titre'],
        'chapo'=>$_POST['chapo'],
        'contenu'=>$_POST['contenu']
    ));

// Retour au formulaire
header('Location:create.php');
?>