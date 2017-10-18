<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 17/09/17
 * Time: 20:16
 */

namespace Framework\Manager;

class BilletManager extends Modele {

    // Renvoie la liste des billets du blog
    public function getBillets()
    {
       $sql = "SELECT id, titre, chapo,
	DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation
	FROM post ORDER BY date_creation DESC LIMIT 5" ;
       return $this->executerRequete ($sql);
    }

    // Renvoie toutes les informations sur un billet
    public function infosBillet($idBillet)
    {
        $sql = "SELECT id, titre, chapo, contenu, 
    		DATE_FORMAT(date_creation, \"%d/%m/%Y à %Hh%imin%ss\") AS date_creation,
    		DATE_FORMAT(date_maj, \"%d/%m/%Y à %Hh%imin%ss\") AS date_maj
    		FROM post WHERE id = :id')" ;
        $infos = $this->executerRequete ($sql, $idBillet);
        return $this->buildModele($infos);
    }

    // Renvoie la liste des billets en admin
    public function getList()
    {
        $sql = "SELECT id, titre, DATE_FORMAT(date_creation, \'[%d-%m-%Y à %Hh%im%ss]\')  AS date_creation, 
              DATE_FORMAT(date_maj, \'[%d-%m-%Y à %Hh%im%ss]\') AS date_maj FROM post ORDER BY date_maj, date_creation DESC'" ;
        return $this->executerRequete($sql);

    }

    // Récupérer un billet à modifier dans le formulaire
    public function recup_update($id)
    {
        $sql = "SELECT id, titre, chapo, contenu FROM post WHERE id = :id";
        return $this->executeRequete($sql, $id);
    }

    // Modifier billet
    public function modif($id)
    {
        $sql = "UPDATE post SET titre = :titre, chapo = :chapo, contenu = :contenu, date_maj = NOW() WHERE id = :id " ;
        return $this->executerRequete($sql, $id);
    }

    // Effacer un billet
    public function erase_billet($id)
    {
        $sql = "DELETE FROM post WHERE id=:id";
        return $this->executerRequete($sql, $id);
    }

    // Créer un billet
    public function create($data)
    {
        $sql = "INSERT INTO post(titre, chapo, contenu, date_creation) VALUES (:titre, :chapo, :contenu, NOW())" ;
        return $this->executeRequete ($sql, $data);
    }

    // Tableau en paramètres contenant les données des requêtes
    public function buildModele($data)
    {
        $post = new Post();
        $post->setId($data['id']);
        $post->setTitre($data['titre']);
        $post->setChapo($data['chapo']);
        $post->setContenu($data['contenu']);
        $post->setDateCreation($data['date_creation']);
        $post->setDateMaj($data['date_maj']);
        return $post;
    }
}