<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 15/01/18
 * Time: 21:07
 */

namespace Framework\Controller;

use Framework\Manager\UserManager;


class AdminChangeAction
{
    private $user;

    public function __construct()
    {
        $this->user = new UserManager();
    }

    public function action()
    {
        $data=$this->user->getUser();

        /* REGEX: au moins 1 majuscule, au moins 1 chiffre, au moins 8 caractères, pas d'espace */
        $regex_mdp = '#(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])\S{8,}#';
        $mdp = $_POST['nv_mdp'];

        /* Verification que les champs de controle soient pleins*/
        if (!empty($_POST['ctrl_ident']) && !empty($_POST['ctrl_mdp']))
        {

            /* Verification que les données soient les mêmes que celles présentes dans la table 'user' */
            if (htmlspecialchars($_POST['ctrl_ident'])==$data->getIdentifiant()
                && password_verify($_POST['ctrl_mdp'], $data->getMdp()) ) {
                //&& htmlspecialchars($_POST['ctrl_mdp'])==$data->getMdp()) {   //En cas de connerie.....

                /* Verification que les champs soient renseignés */
                if (!empty($_POST['nv_mdp']) && !empty($_POST['nv_ident'])) {
                    /* Verification validité nouveaux mdp avec regex */
                    if (preg_match($regex_mdp, $mdp)) {

                        /* Hash password */
                        $pwd = password_hash($mdp, PASSWORD_DEFAULT);
                        $_POST['nv_mdp'] = $pwd;

                        /* Update dans la BDD */
                        $this->user->userUpdate();
                        header('Location:/admin/list');
                    } else {
                            echo "Mot(s) de passe invalide(s). Un mot de passe doit être constitué de plus de 7 caractères, 
                        contenir au moins 1 majuscule et 1 chiffre, et pas d'espace. Vive les Regex !";
                    }
                }

                else {
                        echo "Les deux champs doivent être renseignés.";
                     }
                }

            else
            {
                echo "Les anciennes données ne sont pas valides.";
            }
        }

        else
        {
            echo "Les deux champs de contrôle doivent être renseignés.";
        }
    }
}

