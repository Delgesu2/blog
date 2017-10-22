<?php

require 'vendor/autoload.php';

use Framework\Form\Formulr;


$billet = new Formulr(array('titre' => 'Salut'));

echo $billet -> input ('text');
echo $billet -> input ('text');
echo $billet -> input ('text');
echo $billet -> input ('date');
echo $billet -> input ('date');
echo $billet -> submit();


$user = new Formulr(array());

echo $user -> input ('text');
echo $user -> input ('password');
echo $user -> submit();


$contact = new Formulr(array());

echo $contact -> option('option');
echo $contact -> input ('text');
echo $contact -> input ('text');
echo $contact -> input ('text');
echo $contact -> input ('text');
echo $contact -> input ('textarea');
echo $contact -> submit();