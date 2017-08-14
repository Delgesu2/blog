<!DOCTYPE html>
<html>

<?php
include('head.html');
?>

	<title>Xavier COUTANT - Blog</title>
</head>
</html>

<?php
include ('connect.php');


 echo "<body>
 		<div class = 'container'>
 		";

	// En-tête jumbotron
include ('header.html');
	// fin en-tête jumbotron

echo "<div class='row text-center'>		 	
		 	<h2>Liste des billets<br/></h2>
		 	<h3>Pour lire un message au complet, cliquer sur son titre.</h3>	 	
	  </div>";




// Récupération du contenu de la table 'post'
$liste_post=$bdd->query("SELECT id, titre, chapo, 
	DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ss') AS date_creation
	FROM post ORDER BY date_creation DESC LIMIT 5");
	
		while ($donnees = $liste_post->fetch())  {
			echo "<div class = 'row'>
					<div class = 'col-xs-12'>	
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<div class='row titrepannel'>
									<div class='col-xs-8'>	 
						 				<a href='billet.php?id=" . $donnees['id'] . "'><h3 class='titrepost'>" . htmlspecialchars($donnees['titre']) . "</h3></a>
						 			</div>
						 			<div class='col-xs-4'>
						 			 <h4 class='titredate'>Créé le : " . htmlspecialchars($donnees['date_creation']) . "</h4>
						 			 </div>
						 		</div>
					 		</div> 	
					 	    <div class='panel-body chapo'>" . htmlspecialchars($donnees['chapo']) 
						 . "</div>
						</div>
					</div>
				  </div>";
			}

$liste_post->closeCursor();

	echo "</body>
		</div>";