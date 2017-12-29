<?php
$title = 'Xavier COUTANT - Accueil';
ob_start();
?>

		<div class="row text-center">
			<h2>...un développeur polyvalent</h2>			
		</div>	
		
		<div class="row">

			<!-- texte central -->
			<div class="col-sm-9 col-xs-7">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p>
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
				</p>
				<p>
					At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
				</p>
			</div>
		<!-- fin texte central -->

		<!-- thumbnail -->
			<div class="col-sm-3 col-xs-5">
				<div class="thumbnail fondThumb">
					<img src="/contenu/images/portrait2013.jpg" alt="Mon portrait" title="portrait de Xavier Coutant">
					<div class="caption">
						<h3>&#192; mon propos...</h3>
						<p>Vous pourrez obtenir plus d'informations grâce aux liens suivants</p>						
						<div class="list-group">
							<a href="#" class="list-group-item">T&#233;l&#233;charger mon CV</a>
							<a href="https://www.linkedin.com/in/xavier-coutant-5b273113b/" class="list-group-item">Lien vers page LinkedIn</a>
						</div>	
						
					</div>
				</div>				
			</div>
		<!-- fin thumbnail -->	
			
		</div>	

		<div class="row">
			<!-- Formulaire de contact -->
			<form action="../controleur/send_email.php" method="post" class="col-xs-6">
	  			<legend>Pour m'envoyer un message</legend>

	  			<label for="civilité">Civilit&#233; : </label>
	  			<select id="civilite" name="civilite">
		            <option 
		                value="mr"
		                <?php 
		                    if (!isset($_POST['civilite']) || $_POST['civilite'] == 'mr')
		                    {
		                        echo ' selected="selected"';
		                    }
		                ?>
		            >
		                Monsieur
		            </option>
		            <option 
		                value="mme"
		                <?php 
		                    if (isset($_POST['civilite']) && $_POST['civilite'] == 'mme')
		                    {
		                        echo ' selected="selected"';
		                    }
		                ?>
		            >
		                Madame
		            </option>
		        </select>

			    <div class="form-group">
			      <label for="nom">Nom :</label>
			      <input id="nom" type="text" name="nom" class="form-control" placeholder="Champ obligatoire"
			      value="<?php echo (isset($_POST['nom'])) ? $nom : '' ?>" maxlenght="60"  required />
			    </div>

			     <div class="form-group">
			      <label for="prenom">Pr&#233;nom :</label>
			      <input id="prenom" type="text" name="prenom" class="form-control" 
			      value="<?php echo (isset($_POST['prenom'])) ? $nom : '' ?>" maxlenght="60" > 
			    </div>

			    <div class="form-group">
			      <label for="email">Courriel :</label>
			      <input id="email" type="email" name="email" class="form-control" placeholder="Champ obligatoire"
			      value="<?php echo (isset($_POST['email'])) ? $expediteur : '' ?>" required />
			    </div>

			    <div class="form-group">
			        <label for="sujet">Sujet :</label>
			        <input type="text" id="sujet" name="sujet" class="form-control" value="<?php echo (isset($_POST['sujet'])) ? $sujet : '' ?>" maxlenght="160"
			        />
			    </div>

			    <div class="form-group">
			      <label for="message">Message : </label>
			      <textarea id="message" type="textarea" name="message" class="form-control" rows="6" placeholder="Champ obligatoire" required /></textarea>
			    </div>

	    		<input type="submit" name="envoye" value="Envoyer" />
			</form>
			<!-- fin formulaire de contact -->


			<!-- Bouton accès à fenêtre modale -->
			<div class="col-xs-offset-4 col-xs-1">	
				<a class="btn btn-primary btn-xs active" role="button" data-toggle="modal" data-target="#myModal" href="">Acc&#232;s admin</a>
			</div>
			<!-- fin bouton accès à fenêtre modale -->
		</div>


			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h2 class="modal-title textital modaltitre">Veuillez entrer l'identifiant et le mot de passe</h2>
						</div>

						<form action="/admin" method="post">

							<div class="modal-body">
								
									<label for="identifiant">Identifiant :</label>
									<input type="text" name="identifiant" id="identifiant">			        			       		
								

								
									<label for="mdp">Mot de passe :</label>
									<input type="password" name="mdp" id="mdp">			        			       		
								
							</div>      	

							<div class="modal-footer">
								<input type="submit" name="envoye" value="Valider"> 
								<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
							</div>

						</form>

					</div>        
				</div>
			</div>

<?php
    $content = ob_get_clean();
    require ('public-template.php');
?>