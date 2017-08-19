<?php
include ('connect.php');
include ('menu_admin.html');
$req=$bdd->query('SELECT courriel FROM user WHERE id=1');
$courriel=$req->fetch();
?>

<div class="col-sm-10">
    <h1 class="text-center">Changer données personnelles</h1>

    	<div class="row">
     	
    	<form action="ttt_change_mdp.php" method="post">
    	
    		<!-- Controle anciens anciens identifiant et mot de passe -->
    			
	    				<label for="ctrl_ident">Identifiant :</label>
	    				<input type="text" name="ctrl_ident" id="ctrl_ident">
    				
	    				<label for="ctrl_mdp">Mot de passe :</label>
	    				<input type="password" name="ctrl_mdp" id="ctrl_mdp">
    				

    		<!-- Enregistrement nouveaux identifiant et mot de passe -->
    			
	    				<label for="nv_ident">Nouvel identifiant :</label>
	    				<input type="text" name="nv_ident" id="nv_ident">
    				
		    			<label for="nv_mdp">Nouveau mot de passe :</label>
		    			<input type="password" name="nv_mdp" id="nv_mdp">
		    			<p>Un mot de passe doit être constitué de plus de 7 caractères, contenir au moins 1 majuscule et 1 chiffre, et pas d'espace. Vive les regex !</p>

                        <label for="courriel">Courriel :</label>
                        <input type="text" name="courriel" value="<?php echo htmlspecialchars($courriel['courriel']); ?>">
	    			
	    			<button type="submit">Envoyer</button>   

    	</form>
    </div>
</div>
