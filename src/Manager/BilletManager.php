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
        DATE_FORMAT(datecreation, '%d/%m/%Y à %Hh%imin%ss') AS datecreation,
        DATE_FORMAT(datemaj, 'Mis à jour le %d/%m/%Y à %Hh%imin%ss') AS datemaj,
        CASE WHEN datemaj IS NULL THEN datecreation ELSE datemaj END AS datetri 
        FROM post ORDER BY datetri DESC") ;
       while ($res=$req->fetch()) {
           $this->data[] = $this->buildDomain($res);
       }
       return $this->data;
    }

    // Renvoie toutes les informations sur un billet
    public function infosBillet($id)
    {
        $req = $this->connect()->prepare("SELECT id, titre, chapo, contenu, 
    		DATE_FORMAT(datecreation, \"%d/%m/%Y à %Hh%imin%ss\") AS datecreation,
    		DATE_FORMAT(datemaj, \"%d/%m/%Y à %Hh%imin%ss\") AS datemaj
    		FROM post WHERE id = :id") ;
        $req->execute([':id' => $id]);

        return $this->buildDomain($req->fetch());
    }

    // Renvoie la liste des billets en admin
    public function getList()
    {
        $req = $this->connect()->query("SELECT id, titre, DATE_FORMAT(datecreation, '%d-%m-%Y à %Hh%im%ss') 
              AS datecreation, DATE_FORMAT(datemaj, '%d-%m-%Y à %Hh%im%ss') AS datemaj FROM post ORDER BY id DESC") ;
        while ($res=$req->fetch()) {
            $this->data[] = $this->buildDomain($res);
        }
        return $this->data;
    }

    // Récupérer un billet à modifier dans le formulaire
    public function recup_update($id)
    {
        $req = $this->connect()->prepare("SELECT id, titre, chapo, contenu FROM post WHERE id = :id");
        $req->execute([':id' => $id]);

        return $this->buildDomain($req->fetch());
    }

    // Modifier billet
    public function modif()
    {
        $req = $this->connect()->prepare("UPDATE post SET titre = :titre, chapo = :chapo, contenu = :contenu,
                                                   datemaj = NOW() WHERE id = :id ") ;
        $req->execute(array(
            'titre' => $_POST['titre'],
            'chapo' => $_POST['chapo'],
            'contenu' => $_POST['contenu'],
            'id' => $_POST['id']
        ));
    }

    // Effacer un billet
    public function erase_billet($id)
    {
        $req = $this->connect()->prepare("DELETE FROM post WHERE id=:id");
        $req->execute([':id' => $id]);
    }

    // Créer un billet
    public function create()
    {
        $req = $this->connect()->prepare("INSERT INTO post(titre, chapo, contenu, datecreation)
                                                   VALUES (:titre, :chapo, :contenu, NOW())");
        $req->execute( array(
            'titre' => $_POST['titre'],
            'chapo' => $_POST['chapo'],
            'contenu' => $_POST['contenu']
        ));
    }

    // Hydratation de l'entité par une boucle.
    public function buildDomain(array $data)
    {
        $post = new Post();
      foreach ($data as $key => $value)
      {
          $method = 'set'.ucfirst($key);
          if (method_exists($post, $method))
          {
              $post->$method($value);
          }
      }
        return $post;
    }
}