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
    public function getUser() {
        $req = $this->connect()->prepare("SELECT id, identifiant, mdp, courriel FROM user WHERE id=1");
        $req->execute();
        $data = $req->fetch();
        var_dump($data);
        return $this->buildDomain($data);
    }

       // Modifier données utilisateur
    public function UserUpdate($data) {
        $maj_user = $this->connect()->prepare("UPDATE user SET identifiant = :identifiant, mdp = :mdp, courriel = :courriel") ;
    }

    // Tableau contenant les données de l'entité User
    private function buildDomain(array $data)
    {
        $user = new User();
        $user->setId($data['id']);
        $user->setIdentifiant($data['identifiant']);
        $user->setMdp($data['mdp']);
        $user->setCourriel($data['courriel']);
        return $user;
    }
}