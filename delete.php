<?php
include ('connect.php');

if (isset($_GET['id'])) {
    $req = $bdd->prepare('DELETE FROM post WHERE id=:id');
    $req->execute(array(
        ':id'=>$_GET['id']
    ));
}

header("Location: list.php");