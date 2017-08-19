<?php

require ('../../modele/connect.php');

$req = $bdd->query('SELECT id, titre, DATE_FORMAT(date_creation, \'[%d-%m-%Y à %Hh%im%ss]\')  AS date_creation, 
                    DATE_FORMAT(date_maj, \'[%d-%m-%Y à %Hh%im%ss]\') AS date_maj FROM post ORDER BY date_maj, date_creation DESC');