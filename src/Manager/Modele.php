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

    // Excéture une requête SQL éventuellement paramétrée
    protected function executerRequete($sql, $param = null) {
        if ($param == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->query($sql); // requête préparée  ERREUR ?? "prepare" non ?
            $resultat->execute($param);
        }
        return $resultat;
    }

    // renvoie un objet de connexion à la BDD en initialisant la connexion au besoin

    private function getBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this-> connect();
        }

        return $this->bdd;
    }

}