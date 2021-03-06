<?php
ob_start();
?>

<div class="col-sm-10 col-xs-12">
    <h1 class="text-center">Changer données personnelles</h1>



    	<form method="post" action="/admin/updateuser_action">

    		<!-- Controle anciens anciens identifiant et mot de passe -->
                    <div class="form-group">
	    				<label for="ctrl_ident">Identifiant :</label>
	    				<input class="form-control" type="text" name="ctrl_ident" required id="ctrl_ident">
                    </div>

                    <div class="form-group">
	    				<label for="ctrl_mdp">Mot de passe :</label>
	    				<input class="form-control" type="password" name="ctrl_mdp" required id="ctrl_mdp">
                    </div>

    		<!-- Enregistrement nouveaux identifiant et mot de passe, courriel -->
                    <div class="form-group">
	    				<label for="nv_ident">Nouvel identifiant :</label>
	    				<input class="form-control" type="text" name="nv_ident" required id="nv_ident">
                    </div>

                    <div class="form-group">
		    			<label for="nv_mdp">Nouveau mot de passe :</label>
                        <p>Un mot de passe doit être constitué de <strong>plus de 7 caractères</strong>, contenir <strong>au moins 1 majuscule et 1 chiffre</strong>.</p>
		    			<input class="form-control" type="password" name="nv_mdp" required id="nv_mdp">
                    </div>

                    <div class="form-group">
                        <label for="courriel">Courriel :</label>
                        <input class="form-control" type="email" name="courriel" required value="<?php if (isset($courriel['courriel'])) {echo htmlspecialchars($courriel['courriel']);} ?>">
                    </div>

	    			<button type="submit">Envoyer</button>

    	</form>
</div>

<?php
$content = ob_get_clean();
require ('admin-template.php');
?>