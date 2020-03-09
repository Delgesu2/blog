<?php
$title = 'Xavier COUTANT - Connexion';
ob_start();
?>

    <!-- main content -->
    <div class="main-content" style="background-image: none">
        <div class="container">
            <!-- login area -->
            <div class="login-area">
                <!-- heading -->
                <h3>Connexion</h3>
                <!-- paragraph -->
                <p>Veuillez entrer l'identifiant et le mot de passe</p>
                <form action="/admin" method="post" role="form" id="login-form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Identifiant</label>
                        <input type="text" class="form-control" id="identifiant" name="identifiant" placeholder="Votre identifiant">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
                    </div>

                    <button type="submit" name="envoye" value="Valider" class="btn btn-warning">Envoyer</button>

                    <p class="oubli">Mot de passe oublié ? <a href="/admin/forget" class="ici">Cliquer ici</a> .</p>

                </form>
            </div>
        </div>
    </div>

<?php
$content = ob_get_clean();
require ('template.php');
?>