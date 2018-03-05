<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 04/03/18
 * Time: 18:56
 */

namespace Framework\Controller;

use Framework\Manager\UserManager;


class PasswordReset
{
    private $pswrreset;

    public function __construct()
    {
        $this->pswrreset = new UserManager();
    }

    public function __invoke()
    {
        require __DIR__ . './../../templates/pswrd_reset.php';
    }

    public function action()
    {
        /* REGEX: au moins 1 majuscule, au moins 1 chiffre, au moins 8 caractères, pas d'espace */
        $regex_mdp = '#(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])\S{8,}#';
        $mdp = $_POST['nv_mdp'];

        if (!empty (htmlspecialchars($_POST['nv_mdp']))) {
            /* Verification validité nouveaux mdp avec regex */
            if (preg_match($regex_mdp, $mdp)) {

                /* Hash password */
                $pwd = password_hash($mdp, PASSWORD_DEFAULT);
                $_POST['nv_mdp'] = $pwd;

                /* Update dans la BDD */
                $this->pswrreset->pswrdUpdate();
                session_destroy();
                header('Location:/');
            } else {
                header("refresh:4;url=/pswrreset");
                echo "Mot de passe invalide. Un mot de passe doit être constitué de plus de 7 caractères, 
                        contenir au moins 1 majuscule et 1 chiffre, et pas d'espace. Vive les Regex ! Retour automatique au formulaire.
                        Sinon, cliquer <a href=/pswrreset>ici.<a>";
            }
        } else {
            header("refresh:3;url=/pswrreset");
            echo "Champs vide. Retour automatique au formulaire. Sinon, cliquer <a href=/pswrreset>ici.<a>";
        }
    }
}