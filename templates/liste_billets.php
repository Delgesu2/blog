<?php
$title = 'Xavier COUTANT - Blog';
ob_start();
?>

    <div class='row text-center'>
		 	<h2>Liste des billets<br/></h2>
		 	<h3>Pour lire un message au complet, cliquer sur son titre.</h3>	 	
    </div>";

 <!-- Récupération du contenu de la table 'post' -->
		<?php foreach ( $billets as $post): ?>
			    <div class = 'row'>
					<div class = 'col-xs-12'>	
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<div class='row titrepannel'>
									<div class='col-xs-8'>
                                        <h3 class='titrepost'><?= $post->getTitre(); ?></h3>
						 			</div>
						 			<div class='col-xs-4'>
						 			 <h4 class='titredate'>Créé le : <?= $post->getDateCreation(); ?></h4>
						 			 </div>
						 		</div>
					 		</div> 	
					 	    <div class='panel-body chapo'><?= $post->getContenu(); ?></div>
						</div>
					</div>
				  </div>
		<?php endforeach; ?>

<?php
    $content = ob_get_clean();
    require ('public-template.php');
?>