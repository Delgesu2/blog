<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 03/10/17
 * Time: 22:44
 */

namespace Framework\Controller;

use Framework\Manager\UserManager;

class AccessAdminController
{
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function __invoke()
    {
        $arrayData=$this->userManager->getUser();

        /* Les champs sont-ils pleins ? */
        if (!empty($_POST['identifiant']) && !empty($_POST['mdp'])) {
            /* Les données sont-elles justes ?*/
            if (($_POST['identifiant']) == $arrayData->getIdentifiant()
                && password_verify($_POST['mdp'], $arrayData->getMdp()) ) {
                $_SESSION['identifiant'] = $_POST['identifiant'];
                // Go listadmin page
                header('Location:/admin/list');
            } else {
                header( "refresh:3;url=/" );
                echo "Au moins 1 des deux champs est faux. Retour à la <a href='/'>page d'accueil</a> dans 3 secondes.";
            }
        } else {
            header( "refresh:3;url=/" );
            echo "Les 2 champs doivent être complétés. Retour à la <a href='/'>page d'accueil</a> dans 3 secondes.";
        }
    }
}