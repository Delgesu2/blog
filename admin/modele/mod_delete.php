<?php

 $req = $bdd->prepare('DELETE FROM post WHERE id=:id');
    $req->execute(array(
        ':id'=>$_GET['id']
        ));