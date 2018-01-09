<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 03/10/17
 * Time: 22:44
 */

namespace Framework\Controller;

class AccessAdminController
{
    public function checkAccess()
    {
        /* On va chercher les données dans la BDD */
        // require('../modele/mod_acces_admin.php');

        /* Les champs sont-ils pleins ? */
        if (!empty($_POST['identifiant']) && !empty($_POST['mdp'])) {
            /* Les données sont-elles justes ?*/
            if (($_POST['identifiant']) == $user['identifiant'] && ($_POST['mdp']) == $user['mdp']) {
                echo "Vous êtes identifié.";
                header('Location:../admin/templates/list.php'); // renvoyer vers la page listadmin
            } else {
                echo "Au moins 1 des deux champs est faux. Recommencez.";
            }
        } else {
            echo "Les 2 champs doivent être complétés.";
        }
    }
}