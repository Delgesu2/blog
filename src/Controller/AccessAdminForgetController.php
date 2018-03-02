<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/03/18
 * Time: 11:56
 */

namespace Framework\Controller;


use Framework\Manager\UserManager;

class AccessAdminForgetController
{
    private $userVerify;

    public function __construct()
    {
        $this->userVerify = new UserManager();
    }

    public function __invoke()
    {
        require __DIR__ . './../../templates/emailverify.php';
    }

    public function action()
    {
        $arrayData=$this->userVerify->getUser();
        /** Le champ est-il plein ? */
        if (!empty($_POST['email'])) {
            if (($_POST['email']) == $arrayData->getCourriel()) {
                    header("refresh:3;url=/admin/forget/token");
                    echo 'Courriel de réinitialisation du mot de passe envoyé. Retour page d\'accueil.';
                } else {
                header("refresh:3;url=/admin/forget");
                echo 'L\'adresse n\'est pas celle de l\'administrateur. Retour automatique vers contrôle.';
            }
        } else {
            header("refresh:3;url=/admin/forget");
            echo 'Champ vide. Retour vers contrôle.';
        }
    }
}