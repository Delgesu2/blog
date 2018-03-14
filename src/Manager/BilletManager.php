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

    /**
     * Public posts list
     * @return mixed
     */
    public function getBillets()
    {
       $req = $this->connect()->query("SELECT id, titre, chapo, 
        CONCAT(SUBSTRING(contenu,1,200), '...') AS contenu, 
        DATE_FORMAT(datecreation, '%d/%m/%Y à %Hh%imin') AS datecreation,
        DATE_FORMAT(datemaj, 'Mis à jour le %d/%m/%Y à %Hh%imin') AS datemaj,
        CASE WHEN datemaj IS NULL THEN datecreation ELSE datemaj END AS datetri 
        FROM post ORDER BY datetri DESC") ;
       while ($res=$req->fetch()) {
           $this->data[] = $this->buildDomain($res);
       }
       return $this->data;
    }

    /**
     * Post data on 1 post
     * @param $id
     * @return Post
     */
    public function infosBillet($id)
    {
        $req = $this->connect()->prepare("SELECT id, titre, chapo, contenu, 
    		DATE_FORMAT(datecreation, \"%d/%m/%Y à %Hh%imin\") AS datecreation,
    		DATE_FORMAT(datemaj, \"%d/%m/%Y à %Hh%imin\") AS datemaj
    		FROM post WHERE id = :id") ;
        $req->execute([':id' => $id]);

        return $this->buildDomain($req->fetch());
    }

    /**
     * Post list in admin
     * @return mixed
     */
    public function getList()
    {
        $req = $this->connect()->query("SELECT id, titre, DATE_FORMAT(datecreation, '%d-%m-%Y à %Hh%im%ss') 
              AS datecreation, DATE_FORMAT(datemaj, '%d-%m-%Y à %Hh%im%ss') AS datemaj FROM post ORDER BY id DESC") ;
        while ($res=$req->fetch()) {
            $this->data[] = $this->buildDomain($res);
        }
        return $this->data;
    }

    /**
     * Data recover for update
     * @param $id
     * @return Post
     */
    public function recup_update($id)
    {
        $req = $this->connect()->prepare("SELECT id, titre, chapo, contenu FROM post WHERE id = :id");
        $req->execute([':id' => $id]);

        return $this->buildDomain($req->fetch());
    }

    /**
     * Post update in database
     */
    public function modif()
    {
        $req = $this->connect()->prepare("UPDATE post SET titre = :titre, chapo = :chapo, contenu = :contenu,
                                                   datemaj = NOW() WHERE id = :id ") ;
        $req->bindValue(':titre', htmlspecialchars($_POST['titre']), \PDO::PARAM_STR);
        $req->bindValue(':chapo', htmlspecialchars($_POST['chapo']), \PDO::PARAM_STR);
        $req->bindValue(':contenu', $_POST['contenu'], \PDO::PARAM_STR);
        $req->bindValue(':id', htmlspecialchars($_POST ['id']), \PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * Post delete
     * @param $id
     */
    public function erase_billet($id)
    {
        $req = $this->connect()->prepare("DELETE FROM post WHERE id=:id");
        $req->execute([':id' => $id]);
    }

    /**
     * Post create
     */
    public function create()
    {
        $req = $this->connect()->prepare("INSERT INTO post(titre, chapo, contenu, datecreation)
                                                   VALUES (:titre, :chapo, :contenu, NOW())");
        $req->bindValue(':titre', htmlspecialchars($_POST['titre']), \PDO::PARAM_STR);
        $req->bindValue(':chapo', htmlspecialchars($_POST['chapo']), \PDO::PARAM_STR);
        $req->bindValue(':contenu', $_POST['contenu'], \PDO::PARAM_STR);
        $req->execute();
    }

    /**
     * Hydrate object in loop
     * @param array $data
     * @return Post
     */
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