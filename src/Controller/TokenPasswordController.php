<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 03/03/18
 * Time: 21:15
 */

namespace Framework\Controller;

use Framework\Manager\TokenManager;
use Framework\Manager\UserManager;


class TokenPasswordController
{
    private $tokendb;

    public function __construct()
    {
        $this->tokendb = new TokenManager();
    }

    public function __invoke()
    {
        $token = $this->tokendb->readToken($_GET['token']);

        if ($token->getToken() !== null && is_string($token->getToken())) {
            $_SESSION['token'] = $token->getToken();
            header('Location:/pswrreset');
        } else {
            header("refresh:3;url=/");
            echo 'Vérification non valide. Retour à la page d\'accueil.';
        }
    }
}