<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 12/11/17
 * Time: 18:29
 */

require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('######', 25))
    ->setUsername('#######')
    ->setPassword('######')
    ;

// Create the Mailer
$mailer = new Swift_Mailer($transport);

// Create a message
$data = 'Nouveau message de: ' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<p>' . $_POST['message'] . '</p>';
$message = (new Swift_Message('Nouveau message'))
    ->setFrom(['#######' => 'Mon site-blog'])
    ->setTo('########')
    ->setSubject($_POST['sujet'])
    ->setBody($data, 'text/html');

// Send the message
$result = $mailer->send($message);

echo "<p>Merci de m'avoir contacté. Je vous réponds le plus rapidement possible.</p> 
<p>Veuillez cliquer <a href='/'>sur ce lien</a> pour retourner à la page d'accueil.";
