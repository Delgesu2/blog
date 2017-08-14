<?php
include ('connect.php');

/* On va chercher les données dans la BDD */
$req=$bdd->query('SELECT mdp1, mdp2 FROM user WHERE id=1');
$mdpuser=$req->fetch();

/* Les champs sont-ils pleins ? */
if (!empty($_POST['1mdp']) && !empty($_POST['2mdp']))
{
	/* Les mots de passe sont-ils corrects ?*/
	if (htmlspecialchars($_POST['1mdp'])==$mdpuser['mdp1'] && htmlspecialchars($_POST['2mdp'])==$mdpuser['mdp2'])
	{
		header('Location:list.php');
	}

	else
	{
		echo "Au moins 1 mot de passe faux.";
	}
}