<?php

$req = $bdd->prepare('UPDATE post SET titre = :titre, chapo = :chapo, contenu = :contenu, date_maj = NOW() WHERE id = :id ');
    $req->execute(array(
        'titre'=>$_POST['titre'],
        'chapo'=>$_POST['chapo'],
        'contenu'=>$_POST['contenu'],
        'id'=>$_POST['id']
    ));
