<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 01/03/18
 * Time: 09:34
 */

namespace Framework\Controller;


class MessageSentController
{
    public function __invoke()
    {
        require __DIR__ . './../../templates/messagesent.php';
    }
}