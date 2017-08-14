<?php
include ('connect.php');
include ('menu_admin.html');
?>

<div class="col-sm-10">
    <h1 class="text-center">Changer les mots de passe</h1>

    	<div class="row">
     	
    	<form action="ttt_change_mdp.php" method="post">
    	
    		<!-- Controle anciens mots de passe -->
    			<div class="col-sm-offset-2 col-sm-3">
    				<div class="form-group">
	    				<label for="ctrl1mdp">Ancien mot de passe 1</label>
	    				<input type="text" name="ctrl1mdp" id="ctrl1mdp">
    				</div>

    				<div class="form-group">
	    				<label for="ctrl2mdp">Ancien mot de passe 2</label>
	    				<input type="text" name="ctrl2mdp" id="ctrl2mdp">
    				</div>
    			</div>

    		<!-- Enregistrement nouveaux mots de passe -->
    			<div class="col-sm-offset-1 col-sm-4">
    				<div class="form-group">
	    				<label for="1mdp">Nouveau mot de passe 1 :</label>
	    				<input type="password" name="nv1mdp" id="1mdp">
    				</div> 			

    				<div class="form-group">
		    			<label for="2mdp">Nouveau mot de passe 2 :</label>
		    			<input type="password" name="nv2mdp" id="2mdp">
		    			<p>Un mot de passe doit être constitué de plus de 7 caractères, contenir au moins 1 majuscule et 1 chiffre, et pas d'espace. Vive les regex !</p>
	    			</div> 		
	    		</div>
	    			<button type="submit">Envoyer</button>   

    	</form>
    </div>
</div>
