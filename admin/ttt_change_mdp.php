<?php
include ('connect.php');

/* On va chercher le contenu de la table 'user' */
$req=$bdd->query('SELECT identifiant, mdp FROM user WHERE id=1');
$data=$req->fetch();

/*  Mise-à-jour des valeurs de la classe 'user' */
$maj_user=$bdd->prepare('UPDATE user SET identifiant = :identifiant, mdp = :mdp, courriel = :courriel');

/* REGEX: au moins 1 majuscule, au moins 1 chiffre, au moins 8 caractères, pas d'espace */
$regex_mdp = '#[a-zA-Z\d]+.{7,}#'; 

/* Verification que les champs de controle soient pleins*/
if (!empty($_POST['ctrl_ident']) && !empty($_POST['ctrl_mdp']))
{

	/* Verification que les données soient les mêmes que celles présentes dans la table 'user' */
	if (htmlspecialchars($_POST['ctrl_ident'])==$data['identifiant'] && htmlspecialchars($_POST['ctrl_mdp'])==$data['mdp'])
	{

		/* Verification validité nouveaux mdp avec regex */
		if(preg_match($regex_mdp, $_POST['nv_mdp'])

			/* Update dans la BDD */
			{  
				$maj_user->execute(array(
					'identifiant'=>$_POST['nv_ident'],
					'mdp'=>$_POST['nv_mdp'],
					'courriel'=>$_POST['courriel']	
					));   
			}
		
		else
		{
			echo "Mot(s) de passe invalide(s). Un mot de passe doit être constitué de plus de 7 caractères, contenir au moins 1 majuscule et 1 chiffre, et pas d'espace. Vive les regex !";
		} 	

	}

	else 
	{
		echo "Les anciennes données ne correspondent pas.";
	}

}

else
{
	echo "Les deux champs de contrôle doivent être renseignés";
}