<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 17/09/17
 * Time: 20:16
 */

namespace Framework\Manager;
use App\DBFactory;
use Framework\Modele\Post;


class BilletManager extends DBFactory {

    private $data;

    // Renvoie la liste des billets du blog
    public function getBillets()
    {
       $req = $this->connect()->query("SELECT id, titre, chapo, 
        CONCAT(SUBSTRING(contenu,1,200), '...') AS contenu, 
        DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation
        FROM post ORDER BY date_creation DESC LIMIT 5") ;
       while ($res=$req->fetch()) {
           $this->data[] = $this->buildDomain($res);
       }
       return $this->data;
    }

    // Renvoie toutes les informations sur un billet
    public function infosBillet($id)
    {
        $req = $this->connect()->prepare("SELECT id, titre, chapo, contenu, 
    		DATE_FORMAT(date_creation, \"%d/%m/%Y à %Hh%imin%ss\") AS date_creation,
    		DATE_FORMAT(date_maj, \"%d/%m/%Y à %Hh%imin%ss\") AS date_maj
    		FROM post WHERE id = :id')") ;
        $req->execute([':id' => $id]);

        return $this->buildDomain($req->fetchAll());
    }

    // Renvoie la liste des billets en admin
    public function getList()
    {
        $req = $this->connect()->query("SELECT id, titre, DATE_FORMAT(date_creation, \'[%d-%m-%Y à %Hh%im%ss]\')  AS date_creation, 
              DATE_FORMAT(date_maj, \'[%d-%m-%Y à %Hh%im%ss]\') AS date_maj FROM post ORDER BY date_maj, date_creation DESC'") ;
        while (($res=$req->fetch())) {
            $this->data[] = $this->buildDomain($res);
        }
    }

    // Récupérer un billet à modifier dans le formulaire
    public function recup_update($id)
    {
        $req = $this->connect()->prepare("SELECT id, titre, chapo, contenu FROM post WHERE id = :id");
        $req->execute([':id' => $id]);

        return $this->buildDomain($req->fetchAll());
    }

    // Modifier billet
    public function modif($id)
    {
        $req = $this->connect()->prepare("UPDATE post SET titre = :titre, chapo = :chapo, contenu = :contenu, date_maj = NOW() WHERE id = :id ") ;
        $req->execute([':id' => $id]);

        // Hydrater l'objet Post
        return $this->buildDomain($req->fetchAll());
    }

    // Effacer un billet
    public function erase_billet($id)
    {
        $req = $this->connect()->query("DELETE FROM post WHERE id=:id");
        // sais pas return $this->;
    }

    // Créer un billet
    public function create($data)
    {
        $req = $this->connect()->prepare("INSERT INTO post(titre, chapo, contenu, date_creation) VALUES (:titre, :chapo, :contenu, NOW())") ;
        $req->execute();  // pas besoin de paramètre, puisque MySQL crée un nouvel id automatiquement

        // Hydrater l'objet Post
        return $this->buildDomain($req->fetchAll());
    }

    // Tableau en paramètres contenant les données des requêtes
    public function buildDomain(array $data)
    {
        $post = new Post();
        $post->setId($data['id']);
        $post->setTitre($data['titre']);
        $post->setChapo($data['chapo']);
        $post->setDateCreation($data['date_creation']);
        $post->setContenu($data['contenu']);

        if (isset($data['date_maj'])) {
           $post->setDateMaj($data['date_maj']);
        }

        return $post;
    }
}