<?php
$title = 'Xavier COUTANT - Blog';
ob_start();
?>

<?php
 // if ( $billet!=null) {

  	echo "<div class = 'row'>
					<div class = 'col-xs-12'>	
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<div class='row titrepannel'>
									<div class='col-xs-8'>	 
						 				<h3 class='titrepost'>" . $billet->getTitre() . "</h3>
						 			</div>
						 			<div class='col-xs-4'>
						 			 <h4 class='titredate'>Créé le : " . $billet->getDatecreation() . "</h4>
						 			</div>
						 		</div>
					 		</div> 	
					 	    	<div class='panel-body'><div class='contenu'>" . $billet->getContenu() . "		
					 	    </div>
						</div>
					</div>
		 </div>";

//  }

  if ($billet->getDatemaj()!=NULL) {
  	echo "<span class='badge badge-primary'>
  				Derni&#232;re mise-&#224;-jour : " . $billet->getDatemaj()
  		 . "</span>";
  }

$content = ob_get_clean();
require ('public-template.php');
