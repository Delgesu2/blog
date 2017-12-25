<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 16/09/17
 * Time: 19:57
 */

namespace Framework\Manager;
use App\DBFactory;

abstract class Modele extends DBFactory{

    // Objet PDO d'accès à la BDD
    private $bdd;

    // Exécute une requête SQL éventuellement paramétrée
    protected function executerRequete($sql, $param = null) {
        if ($param == null) {
            var_dump($sql);
            $resultat = $this->getBdd()->query($sql); // exécution directe
            //var_dump($resultat);

        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // exécution préparée
            $resultat->execute($param);
        }
        return $resultat;
    }

    public function __construct()
    {
        $this->getBdd();
    }



    // renvoie un objet de connexion à la BDD en initialisant la connexion au besoin

    private function getBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = $this->connect();
            var_dump($this->bdd);
        }

        return $this->bdd;
    }

}