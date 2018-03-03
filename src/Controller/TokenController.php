<?php

namespace Framework\Controller;

use Framework\Manager\TokenManager;

class TokenController
{
    private $tokendb;

    public function __construct()
    {
        $this->tokendb = new TokenManager;
    }

    public function __invoke()
    {
        // Generate token
        $token = uniqid(rand(), true);


        // Send token with Swiftmailer //

        // Get mailer informations
        $data = require __DIR__ . './../../config/mailer.php';

        // Create the Transport
        $transport = (new \Swift_SmtpTransport($data['smtp'], 25))
            ->setUsername($data['username'])
            ->setPassword($data['password'])
        ;

        // Create the Mailer
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $contact = 'Nouveau message du blog: le lien suivant vous permettra de réinitialiser votre mot de passe:' . '
        <a href="http://blog.localhost/admin/forget/pswd?token=' . $token . '">Cliquez ici !</a></br>
        <p>Attention: lien valable pendant 15 minutes.</p>';
        $message = (new \Swift_Message('Nouveau message'))
            ->setFrom([$data['from'] => 'Mon site-blog'])
            ->setTo($data['to'])
            ->setSubject('Réinitialisation mot-de-passe')
            ->setBody($contact, 'text/html');

        // Send the message
        $result = $mailer->send($message);

        // Insert token in database
           $this->tokendb->createToken($token);

           header("refresh:3;url=/");
           echo 'Courriel pour réinitialiser mot de passe envoyé. Redirection automatique vers l\'accueil.';
    }
}
