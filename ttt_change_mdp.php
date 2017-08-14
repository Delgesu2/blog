<?php
include ('connect.php');

/* On va chercher le contenu de la table 'user' */
$req=$bdd->query('SELECT mdp1, mdp2 FROM user WHERE id=1');
$mdpuser=$req->fetch();

/*  Mise-à-jour des valeurs de la classe 'user' */
$maj_mdpuser=$bdd->prepare('UPDATE user SET mdp1 = :1mdp, mdp2 = :2mdp');

/* REGEX: au moins 1 majuscule, au moins 1 chiffre, au moins 8 caractères, pas d'espace */
$regex_mdp = '#[a-zA-Z\d]+.{7,}#'; 

/* Verification que les champs de controle soient pleins*/
if (!empty($_POST['ctrl1mdp']) && !empty($_POST['ctrl2mdp']))
{

	/* Verification que les mdp entrés soient les mêmes que ceux présents dans la table 'user' */
	if (htmlspecialchars($_POST['ctrl1mdp'])==$mdpuser['mdp1'] && htmlspecialchars($_POST['ctrl2mdp'])==$mdpuser['mdp2'])
	{

		/* Verification validité nouveaux mdp avec regex */
		if(
			preg_match($regex_mdp, $_POST['nv1mdp']) &&
			preg_match($regex_mdp, $_POST ['nv2mdp'])) 

		/* Update dans la BDD */	
		{  
			$maj_mdpuser->execute(array(
				'1mdp'=>$_POST['nv1mdp'],
				'2mdp'=>$_POST['nv2mdp']	
				));
		}
		
		else
		{
			echo "Mot(s) de passe invalide(s). On répète: Un mot de passe doit être constitué de plus de 7 caractères, contenir au moins 1 majuscule et 1 chiffre, et pas d'espace. Vive les regex !";
		} 	

	}

	else 
	{
		echo "Mauvais mot(s) de passe";
	}

}

else
{
	echo "Les champs pour les deux ANCIENS mots de passe doivent être renseignés";
}