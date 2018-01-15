<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 19/09/17
 * Time: 19:27
 */

namespace Framework\Manager;
use App\DBFactory;
use Framework\Modele\User;

class UserManager extends DBFactory {

    public $data;

    // Récupérer données utilisateur
    public function getUser() {  //$id en param ?
        $req = $this->connect()->prepare("SELECT id, identifiant, mdp, courriel FROM user WHERE id=1");
        $req->execute();
        $me = $req->fetch();

        return $me;
    }

       // Modifier données utilisateur
    public function UserUpdate($data) {
        $maj_user = $this->connect()->prepare("UPDATE user SET identifiant = :identifiant, mdp = :mdp, courriel = :courriel") ;
    }

    // Tableau contenant les données de l'entité User
  /**  public function buildDomain(array $data)
    {
        $user = new User();
        $user->setId($data['id']);
        $user->setIdentifiant($data['identifiant']);
        $user->setCourriel($data['courriel']);
        return $user;
    }**/
}