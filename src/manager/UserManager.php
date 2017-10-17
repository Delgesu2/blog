<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 19/09/17
 * Time: 19:27
 */

namespace User;

class UserManager extends Modele {

    // Récupérer données utilisateur
    public function getUser($id) {
        $sql = "SELECT id, identifiant, mdp, courriel from USER WHERE :id";
        $getUser = $this->executerRequete($sql, $id);
        return $this->changeUser($getUser);
    }

       // Modifier données utilisateur
    public function UserUpdate($data) {
        $sql = "UPDATE user SET identifiant = :identifiant, mdp = :mdp, courriel = :courriel" ;
        $modUser = $this->executerRequete($sql, $data);
        return $modUser;
    }

    // Tableau contenant les données de l'entité User
    public function changeUser(array $data)
    {
        $user = new User();
        $user->setId($data['id']);
        $user->setIdentifiant($data['identifiant']);
        $user->setCourriel($data['courriel']);
        return $user;
    }
}