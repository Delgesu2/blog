<?php

require 'vendor/autoload.php';

use Framework\Form\CreatePost;
use Framework\Form\CreateUser;
use Framework\Form\Contact;


$billet = new CreatePost(array('titre' => 'Salut'));

echo $billet -> input ('text');
echo $billet -> input ('text');
echo $billet -> input ('text');
echo $billet -> input ('date');
echo $billet -> input ('date');
echo $billet -> submit();


$user = new CreateUser (array());

echo $user -> input ('text');
echo $user -> input ('password');
echo $user -> submit();


$contact = new Contact(array());

echo $contact -> option('option');
echo $contact -> input ('text');
echo $contact -> input ('text');
echo $contact -> input ('text');
echo $contact -> input ('text');
echo $contact -> input ('textarea');
echo $contact -> submit();