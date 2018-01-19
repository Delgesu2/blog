<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 24/09/17
 * Time: 19:38
 */

namespace Framework\Controller;

use Framework\Manager\BilletManager;


class ArticleDetailsController extends AbstractController
{

    private $billet;

    public function __construct()
    {
        $this->billet = new BilletManager();
    }

    // Affiche les détails sur le billet dont l'id en BDD est stocké dans $id
    public function action($id)
    {
        $billet = $this->billet->infosBillet($id);
        require __DIR__ . './../../templates/billet.php';
    }
}