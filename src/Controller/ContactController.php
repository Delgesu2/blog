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
        require __DIR__ . './../../App/mailer.php';
    }
}