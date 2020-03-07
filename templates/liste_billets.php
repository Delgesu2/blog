<?php
$title = 'Xavier COUTANT - Blog';
ob_start();
?>

    <div class='row text-center'>
		 	<h2 class="soustitre">Liste des billets<br/></h2>
		 	<h3>Pour lire un message au complet, cliquer sur son titre.</h3>	 	
    </div>


<?php if (!empty($billets)) {
       // Boucle affichage : récupération des lignes de la table post
		     foreach ($billets as $post): ?>
			    <div class = 'row'>
					<div class = 'col-xs-12'>
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<div class='row titrepannel'>
									<div class='col-xs-8'>
                                        <a href="/post/details/<?= $post->getId(); ?>"><h3 class='titrepost'><?= $post->getTitre(); ?></h3></a>
						 			</div>
						 			<div class='col-xs-4'>
						 			 <h4 class='titredate'>Créé le : <?= $post->getDatecreation(); ?></h4>
						 			 </div>
						 		</div>
					 		</div>
                            <div class='badge badge primary'><?= $post->getDatemaj(); ?></div>
					 	    <div class='panel-body chapo'><?= $post->getChapo(); ?></div>
                            <div class='panel-body contenu'><?= $post->getContenu(); ?></div>
                        </div>
					</div>
				  </div>
		<?php endforeach;
        } else
            echo '<h3>Pas de billet à lire</h3>';
        ?>
    <!-- Fin boucle -->

<?php
    $content = ob_get_clean();
    require ('public-template.php');
