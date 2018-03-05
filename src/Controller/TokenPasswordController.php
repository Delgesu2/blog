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
    private $user;

    public function __construct()
    {
        $this->tokendb = new TokenManager();
        $this->user = new UserManager();
    }

    public function __invoke()
    {
        $dbtoken = $this->tokendb->readToken();
        $sessionuser[] = $this->user->getUser();
        $_SESSION = $sessionuser['identifiant'];

        /**var_dump($dbtoken);
        var_dump($_GET['token']);**/

        if (isset($_GET['token']) === $dbtoken) {
            if (isset($_SESSION['identifiant'])) {
                header('Location:/pswrreset');
            }
        } else
        {
            header("refresh:3;url=/");
            echo 'Vérification non valide. Retour à la page d\'accueil.';
        }
    }
}