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

    /**
     * Recover user data
     * @return User
     */
    public function getUser() {
        $req = $this->connect()->prepare("SELECT id, identifiant, mdp, courriel FROM user WHERE id=1") ;
        $req->execute();
        $data = $req->fetch();

        return $this->buildDomain($data);
    }

    /**
     * Update user data
     */
    public function userUpdate() {
        $req = $this->connect()->prepare("UPDATE user SET identifiant = :identifiant, mdp = :mdp, courriel = :courriel
        WHERE id=1") ;
        $req->bindValue(':identifiant', $_POST['nv_ident'], \PDO::PARAM_STR);
        $req->bindValue(':mdp', $_POST['nv_mdp'], \PDO::PARAM_STR);
        $req->bindValue(':courriel', $_POST['courriel'], \PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * Update password
     */
    public function pswrdUpdate() {
        $req = $this->connect()->prepare("UPDATE user SET mdp = :mdp WHERE id=1");
        $req->bindValue(':mdp', $_POST['nv_mdp'], \PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * Hydrate object in loop
     * @param array $data
     * @return User
     */
    public function buildDomain(array $data)

    {
        $user = new User();
        $user->setId($data['id']);
        $user->setIdentifiant($data['identifiant']);
        $user->setMdp($data['mdp']);
        $user->setCourriel($data['courriel']);
        return $user;
    }
}