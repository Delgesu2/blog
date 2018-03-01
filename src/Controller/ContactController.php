<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 22/02/18
 * Time: 14:44
 */

namespace Framework\Controller;


class ContactController
{

    public function __invoke()
    {
        require __DIR__ . './../../templates/contact.php';
    }

    public function action()
    {
        // Read data array
        $data = require __DIR__ . './../../config/mailer.php';

        // Create the Transport
        $transport = (new \Swift_SmtpTransport($data['smtp'], 25))
            ->setUsername($data['username'])
            ->setPassword($data['password'])
        ;

// Create the Mailer
        $mailer = new \Swift_Mailer($transport);

// Create a message
        $contact = 'Nouveau message de: ' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<p>' . $_POST['message'] . '</p>';
        $message = (new \Swift_Message('Nouveau message'))
            ->setFrom([$data['from'] => 'Mon site-blog'])
            ->setTo($data['to'])
            ->setSubject($_POST['sujet'])
            ->setBody($contact, 'text/html');

// Send the message
        $result = $mailer->send($message);

        /**echo "<p>Merci de m'avoir contacté. Je vous réponds le plus rapidement possible.</p>
<p>Veuillez cliquer <a href='/'>sur ce lien</a> pour retourner à la page d'accueil.";
**/

// Redirection
         header('Location:/contact/sent');
    }
}