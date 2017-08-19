<?php

/* On va chercher les données dans la BDD */
require('../modele/mod_acces_admin.php');

/* Les champs sont-ils pleins ? */
if (!empty($_POST['identifiant']) && !empty($_POST['mdp']))
{
	/* Les données sont-elles justes ?*/
	if (htmlspecialchars($_POST['identifiant'])==$user['identifiant'] && htmlspecialchars($_POST['mdp'])==$user['mdp'])
	{
		echo "Vous êtes identifié.";
		header('Location:../admin/vue/list.php');
	}

	else
	{
		echo "Au moins 1 des deux champs est faux. Recommencez.";
	}
}

else
{
	echo "Les 2 champs doivent être complétés.";
}