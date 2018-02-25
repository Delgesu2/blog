<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 12/11/17
 * Time: 18:29
 */

require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.orange.fr'))
    ->setUsername('coutant.xavier@orange.fr')
    ->setPassword('marseille2')
    ;

// Create the Mailer
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Nouveau message'))
    ->setFrom($_POST['email'])
    ->setTo('coutant.xavier@orange.fr')
    ->setSubject($_POST['sujet'])
    ->setBody($_POST['message'])
    ->addPart($_POST['civilite'])
    ->addPart('nom' . $_POST['nom'])
    ->addPart('prenom' . $_POST['prenom'])
    ;

echo "<p>Merci de m'avoir contacté. Je vous réponds le plus rapidement possible.</p> 
<p>Veuillez cliquer <a href='/'>sur ce lien</a> pour retourner à la page d'accueil.";