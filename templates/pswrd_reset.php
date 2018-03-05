<?php
if (isset($_SESSION['identifiant'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>R&#233;initialisation mot-de-passe</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="../contenu/css/bootstrap.min.css" rel="stylesheet">
        <link rel="../contenu/css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/contenu/css/style.css">
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
    <div class='container'>
        <div class="row">
            <div class="col-xs-12 col-md-offset-3 col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Entrer le nouveau mot de passe</h3>
                    </div>
                    <div class="panel-body">

                        <form method="POST" action="/pswrd_reset_action">

                            <div class="input-group form-group">
                                <input type="password" class="form-control" name="nv_mdp" required
                                       aria-describedby="basic-addon1">
                            </div>

                            <button type="submit">Envoyer</button>
                            <span><a href="/" class="annuler">Annuler</a></span>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
}
else {
    header('Location:/');
}