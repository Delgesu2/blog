<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 12/11/17
 * Time: 18:29
 */

require_once '../../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.orange.fr'))
    ->setUsername('coutant.xavier@orange.fr')
    ->setPassword('marseille2')
    ;

// Create the Mailer
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Nouveau message'))
    ->setFrom($POST['email'])
    ->setTo('coutant.xavier@orange.fr')
    ->setBody($_POST['sujet'])
    ->addPart('nom' . $_POST['nom'])
    ->addPart('prenom' . $_POST['prenom'])
    ;
