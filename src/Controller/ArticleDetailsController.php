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

    // Affiche les détails sur le billet
    public function display($idBillet)
    {
        $billet = $this->billet->infosBillet($idBillet);
        require __DIR__ . './../../templates/billet.php';
    }
}