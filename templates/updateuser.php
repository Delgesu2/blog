<?php
session_start();
ob_start();
?>

<div class="col-sm-10">
    <h1 class="text-center">Changer mot de passe et identifiant</h1>


    <form method="post" action="/admin/updateuser_action">
        <div class="form-group">
            <label for="ctrl_ident">Identifiant:</label>
            <input class="form-control" type="text" name="ctrl_ident" id="ctrl_ident">
        </div>

        <div class="form-group">
            <label for="ctrl_mdp">Mot de passe:</label>
            <input class="form-control" type="text" name="ctrl_mdp" id="ctrl_mdp">
        </div>

        <input type="submit">
    </form>




<?php
$content = ob_get_clean();
require ('admin-template.php');
?>