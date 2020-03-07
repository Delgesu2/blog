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
        $transport = (new \Swift_SmtpTransport($data['smtp'], 465, 'ssl'))
            ->setUsername($data['username'])
            ->setPassword($data['password'])
        ;

        // Create the Mailer
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $contact = 'Nouveau message de: ' . $_POST['civilite'] . ' ' . htmlspecialchars($_POST['prenom']) .
            ' ' . htmlspecialchars($_POST['nom']) . '<p>Adresse courriel: ' . htmlspecialchars($_POST['email']) . '</p>
            <p>' .htmlspecialchars($_POST['message']) . '</p>';
        $message = (new \Swift_Message('Nouveau message'))
            ->setFrom([$data['from'] => 'Mon site-blog'])
            ->setTo($data['to'])
            ->setSubject(htmlspecialchars($_POST['sujet']))
            ->setBody($contact, 'text/html');

        // Send the message
        $result = $mailer->send($message);

        // Redirection
         header('Location:/contact/sent');
    }
}