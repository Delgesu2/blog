<?php
$title = 'Xavier COUTANT - Blog';
ob_start();
?>

    <!-- Affichage du billet sélectionné -->
<?php

  if (isset($_GET['id'])) {  

  	if (!preg_match("#script#", $data['contenu'])) {		

  	echo "<div class = 'row'>
					<div class = 'col-xs-12'>	
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<div class='row titrepannel'>
									<div class='col-xs-8'>	 
						 				<h3 class='titrepost'>" . htmlspecialchars($data['titre']) . "</h3>
						 			</div>
						 			<div class='col-xs-4'>
						 			 <h4 class='titredate'>Créé le : " . htmlspecialchars($data['date_creation']) . "</h4>
						 			 </div>
						 		</div>
					 		</div> 	
					 	    	<div class='panel-body'><div class='chapo'>" . htmlspecialchars($data['chapo']) . "</div>
					 	    	<p>" . ($data['contenu']) .
					 	    	"</div>
						</div>
					</div>
		 </div>";

  		}

  		else echo "Tu as voulu me piéger, petit filou !";
  	}

  if ($data['date_maj']!=NULL) {
  	echo "<span class='badge badge-primary'>
  				Derni&#232;re mise-&#224;-jour : " . htmlspecialchars($data['date_maj']) 
  		 . "</span>";
  }
  
?>

<?php
$content = ob_get_clean();
require ('public-template.php');
?>