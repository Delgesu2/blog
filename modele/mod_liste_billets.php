<?php

require ('connect.php');

$liste_post=$bdd->query("SELECT id, titre, chapo, 
	DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation
	FROM post ORDER BY date_creation DESC LIMIT 5");