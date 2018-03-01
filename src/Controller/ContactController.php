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
        // Create the Transport
        $transport = (new \Swift_SmtpTransport('smtp.orange.fr', 25))
            ->setUsername('coutant.xavier@orange.fr')
            ->setPassword('marseille2')
        ;

// Create the Mailer
        $mailer = new \Swift_Mailer($transport);

// Create a message
        $data = 'Nouveau message de: ' . $_POST['prenom'] . ' ' . $_POST['nom'] . '<p>' . $_POST['message'] . '</p>';
        $message = (new \Swift_Message('Nouveau message'))
            ->setFrom(['xavierus70@hotmail.com' => 'Mon site-blog'])
            ->setTo('coutant.xavier@orange.fr')
            ->setSubject($_POST['sujet'])
            ->setBody($data, 'text/html');

// Send the message
        $result = $mailer->send($message);

        /**echo "<p>Merci de m'avoir contacté. Je vous réponds le plus rapidement possible.</p>
<p>Veuillez cliquer <a href='/'>sur ce lien</a> pour retourner à la page d'accueil.";
**/

// Redirection
         header('Location:/contact/sent');
    }
}