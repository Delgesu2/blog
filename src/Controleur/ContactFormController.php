<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 27/10/17
 * Time: 22:16
 */

namespace Framework\Controller;

use Framework\Form\Contact;

class ContactFormController
{
    private $contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }

    // Affiche le formulaire de contact
    public function contactForm()
    {
        $kontact = $this->contact;
        $vue = new Vue ("Contact");
        $mail = new Mail($_POST);
    }
}