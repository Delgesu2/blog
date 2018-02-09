<?php
$title = 'Xavier COUTANT - Accueil';
ob_start();
?>


		
		<div class="row">

			<!-- texte central -->
			<div class="col-sm-10 col-xs-7">
                <div class="row text-center">
                    <h2>D&#233;veloppeur PHP/Symfony</h2>
                </div>
                <p class="chapo chapolanding">
                    <em>D&#233;veloppeur PHP/Symfony op&#233;rationnel d&#232;s avril 2018. Actuellement en formation avec
                        <a href="https://openclassrooms.com">OpenClassrooms</a>.
                        D&#233;veloppeur curieux et aimant apprendre, particuli&#232;rement int&#233;ress&#233; par les Syst&#232;mes de Gestion de Base de Donn&#233;es.
                    </em>
				</p>

                <!-- 1er panneau -->
                <div id="flip">
                        Ce site
                </div>
                <div id="panel">
                    <p>
                        Ce site personnel/blog a &#233;t&#233; r&#233;alis&#233; dans le cadre d'un projet OpenClassrooms, parcours "<a href="https://openclassrooms.com/paths/developpeur-se-d-application-php-symfony">D&#233;veloppeur d'application
                            PHP/Symfony</a>". Le site comprend un formulaire de contact ainsi qu'une interface administrateur de blog permettant un CRUD complet.
                        Il a mobilis&#233; les technologies suivantes:
                    </p>

                    <table class="table">
                        <tr>
                            <td>HTML</td><td>Bootstrap</td><td>Swiftmailer</td>
                        </tr>
                        <tr>
                            <td>CSS</td><td>PHP/POO</td><td>MySQL</td>
                        </tr>
                    </table>
                    Et une goutte de jQuery, d'accord ...
                </div>

                <!-- 2e panneau -->
                <div id="flip2">
                    Projets
                </div>
				<div id="panel2">
                    <p>
                        Projets r&#233;alis&#233;s lors de la formation:
                    </p>
                        <ol>
                        <li>cr&#233;ation d'un site Wordpress</li>
                        <li>r&#233;alisation de cahiers des charges</li>
                        <li>cr&#233;ation de l'architecture d'une base de donn&#233;es MySQL d'un commerce</li>
                        <li>cr&#233;ation d'un site-blog en PHP orient&#233; objet</li>
                        <li>d&#233;veloppement d'un site communautaire avec Symfony</li>
                        <li>d&#233;veloppement d'un site e-commerce avec impl&#233;mentation d'une API</li>
                        </ol>
                </div>

                <div id="flip3">
                    Historique
                </div>
                <div id="panel3">
                <p>
                    Apr&#232;s une vie riche de voyages et d'exp&#233;riences professionnelles tr&#232;s diverses m'ayant ouvert
                    diff&#233;rents horizons à travers le monde, je me suis orient&#233; vers le d&#233;veloppement web, attir&#233; tout d'abord par
                    la probl&#233;matique tr&#232;s actuelle de la s&#233;curit&#233; des donn&#233;es stock&#233;es.
                    Utilisateur de Mac puis Linux depuis une quinzaine d'ann&#233;es, j'ai commenc&#233; par m'int&#233;resser de mani&#232;re
                    approfondie à la ligne de commande Linux, puis naturellement au HTML/CSS, à jQuery, à MySQL (<span class="glyphicon glyphicon-heart"></span>)  puis
                    PHP et Symfony. Les cours OpenClassrooms sont mon principal vecteur d'apprentissage, mais aussi des sites comme
                    <a href="https://www.developpez.net/">developpez.net</a>, <a href="https://stackoverflow.com/">stackoverflow.com</a>, <a href="https://www.w3schools.com/">w3schools.com</a> ou
                    <a href="https://github.com/">github</a>...
                </p>
                <p>
                    Ma vie professionnelle pr&#233;c&#233;dente m'a apport&#233; une ouverture d'esprit certaine, un goût pour la linguistique
                    et un type de r&#233;flexion que l'on retrouve dans la programmation. Ayant &#233;t&#233; professeur des &#233;coles, je connais les vertus
                    de l'apprentissage de la programmation informatique dans la construction du langage.
                </p>
                </div>
			</div>
		<!-- fin texte central -->

		<!-- thumbnail -->
			<div class="col-sm-2 col-xs-5">
				<div class="thumbnail fondThumb">
					<img src="/contenu/images/portrait2013.jpg" alt="Mon portrait" title="portrait de Xavier Coutant">
					<div class="caption">
						<h3>&#192; mon propos...</h3>
						<p>Plus d'informations avec les liens suivants</p>
						<div class="list-group">
							<a href="#" class="list-group-item"><span class="glyphicon glyphicon-download"></span> Mon CV</a>
							<a href="https://www.linkedin.com/in/xavier-coutant-5b273113b/" class="list-group-item linkedin">
                              <img class="linkedin" src="http://icon-icons.com/icons2/99/PNG/512/linkedin_socialnetwork_17441.png" alt="LinkedIn"
                                         title="ma page LinkedIn" ></a>
						</div>
                        <!-- Bouton acc&#232;s à fenêtre modale -->
                        <a class="btn btn-primary btn-xs active" role="button" data-toggle="modal" data-target="#myModal" href="">Acc&#232;s admin</a>
                        <!-- fin bouton acc&#232;s à fenêtre modale -->
                    </div>
				</div>				
			</div>
		<!-- fin thumbnail -->	
			
		</div>

		<div class="row panel4">
			<!-- Formulaire de contact -->
			<form action="../App/mailer.php" method="post" class="col-xs-6">
	  			<legend>Pour m'envoyer un message</legend>

	  			<label for="civilit&#233;">Civilit&#233; : </label>
	  			<select id="civilite" name="civilite">
		            <option value="mr">
		                Monsieur
		            </option>
		            <option value="mme">
		                Madame
		            </option>
		        </select>

			    <div class="form-group">
			      <label for="nom">Nom :</label>
			      <input id="nom" type="text" name="nom" class="form-control" placeholder="Champ obligatoire"
			       maxlenght="60"  required />
			    </div>

			     <div class="form-group">
			      <label for="prenom">Pr&#233;nom :</label>
			      <input id="prenom" type="text" name="prenom" class="form-control" maxlenght="60" >
			    </div>

			    <div class="form-group">
			      <label for="email">Courriel :</label>
			      <input id="email" type="email" name="email" class="form-control" placeholder="Champ obligatoire"
			       required />
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
                                <button type="submit" name="envoye" value="Valider">Valider</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
							</div>

						</form>

					</div>        
				</div>
			</div>

<!-- Javascript -->
<script>
    $(document).ready(function(){
        $("#flip").click(function(){
            $("#panel").slideToggle("slow");
        });
    });

    $(document).ready(function(){
        $("#flip2").click(function(){
            $("#panel2").slideToggle("slow");
        });
    });

    $(document).ready(function(){
        $("#flip3").click(function(){
            $("#panel3").slideToggle("slow");
        });
    });
</script>


<?php
    $content = ob_get_clean();
    require ('public-template.php');
?>