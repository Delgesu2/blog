<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 19/09/17
 * Time: 19:27
 */

require_once 'Modele.php';

class ModUser extends Modele {

    // Récupérer données utilisateur
    public function getUser() {
        $sql = "SELECT id, identifiant, mdp, courriel from USER";
        $getUser = $this->executerRequete($sql);
        return $getUser;
    }

    // Modifier données utilisateur
    public function modUser($data) {
        $sql = "UPDATE user SET identifiant = :identifiant, mdp = :mdp, courriel = :courriel" ;
        $modUser = $this->executerRequete($sql, $data);
        return $modUser;
    }

    // Tableau contenant les données de l'entité User
    public function changeUser($data)
    {
        $user = new User();
        $user->setIdUser($data['id']);
        return $user;
    }

}