<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 16/09/17
 * Time: 19:57
 */

namespace Framework\Manager;


abstract class Modele {

    // Objet PDO d'accès à la BDD
    private $bdd;

    // Excéture une requête SQL éventuellement paramétrée
    protected function executerRequete($sql, $param = null) {
        if ($param == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->query($sql); // requête préparée
            $resultat->execute($param);
        }
        return $resultat;
    }

    // renvoie un objet de connexion à la BDD en initialisant la connexion au besoin

    private function getBdd() {
        if ($this->bdd == null) {

            // Création de la connexion
            $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '',
                array(PDO::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }

}