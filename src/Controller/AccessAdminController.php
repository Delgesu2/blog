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

    public function display()
    {
        $data=$this->userManager->getUser();

        /* Les champs sont-ils pleins ? */
        if (!empty($_POST['identifiant']) && !empty($_POST['mdp'])) {

            /* Les données sont-elles justes ?*/
            if (($_POST['identifiant']) == $data['identifiant'] && ($_POST['mdp']) == $data['mdp']) {
                // Start session
                session_start();
                $_SESSION['identifiant'] = $_POST['identifiant'];
                // Go listadmin page
                header('Location:/admin/list');
            } else {
                echo "Au moins 1 des deux champs est faux. Recommencez.";
            }
        } else {
            echo "Les 2 champs doivent être complétés.";
        }
    }
}