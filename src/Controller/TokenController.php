<?php

namespace Framework\Controller;

use Framework\Manager\TokenManager;

class TokenController
{

    private $token;
    private $tokendb;



    public function __construct()
    {
        $this->tokendb = new TokenManager;
    }

    public function __invoke($token)
    {
        // Generate token
        $token = uniqid(rand(10, 99), true);

        // Insert token in database
        $this->tokendb->createToken($token);

        // Send token with Swiftmailer
        $data = require __DIR__ . './../../config/mailer.php';

        // Create the Transport
        $transport = (new \Swift_SmtpTransport($data['smtp'], 25))
            ->setUsername($data['username'])
            ->setPassword($data['password'])
        ;

        // Create the Mailer
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $contact = 'Nouveau message du blog: le lien suivant vous permettra de réinitialiser votre mot de passe:' . '<a
			href="blog.localhost/token? . echo $token . ">' . 'Cliquez ici !' . '</a>';
        $message = (new \Swift_Message('Nouveau message'))
            ->setFrom([$data['from'] => 'Mon site-blog'])
            ->setTo($data['to'])
            ->setSubject('Réinitialisation mot-de-passe')
            ->setBody($contact, 'text/html');

        // Send the message
        $result = $mailer->send($message);
    }
}
