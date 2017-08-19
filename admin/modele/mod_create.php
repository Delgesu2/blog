<?

$req = $bdd->prepare('INSERT INTO post(titre, chapo, contenu, date_creation) VALUES (:titre, :chapo, :contenu, NOW())');
    $req->execute(array(
        'titre'=>$_POST['titre'],
        'chapo'=>$_POST['chapo'],
        'contenu'=>$_POST['contenu']
    ));