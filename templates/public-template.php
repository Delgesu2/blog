<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
        <link rel="icon" type="image/png" href="../contenu/images/logoBauhaus.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="../contenu/css/bootstrap.min.css" rel="stylesheet">
        <link rel="../contenu/css/bootstrap-theme.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href= "/contenu/css/style.css">
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
    <div class='container'>

        <!-- Header -->
    <div class="jumbotron">
        <h1 class="jumbotitre">Xavier Coutant</h1>
        <p class="subtitle">D&#233;veloppeur PHP/Symfony Junior</p>
        <!-- Desktop menu -->
        <div class="btn-group btnjumbo" role="group">
            <a class="btn btn-danger fond" href="/">Accueil</a>
            <a class="btn btn-danger fond" href="/post/list">Blog</a>
            <a class="btn btn-danger fond" href="/contact">Contact</a>
            <!-- Accès fenêtre modale -->
            <a class="btn btn-danger fond" role="button" data-toggle="modal" data-target="#myModal" href="">Admin</a>
        </div>
        <!-- Mobile menu -->
        <div class="btn-group btnmobile">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/">Accueil</a></li>
                <li><a href="/post/list">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <!-- Accès fenêtre modale -->
                <li><a role="button" data-toggle="modal" data-target="#myModal" href="">Admin</a></li>
            </ul>
        </div>
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

                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <label for="identifiant">Identifiant :</label>
                                    <input type="text" name="identifiant" id="identifiant" required>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label for="mdp">Mot de passe :</label>
                                    <input type="password" name="mdp" id="mdp" required>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="envoye" value="Valider">Valider</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button> </br>
                            <p class="oubli">Mot de passe oubli&#233; ? <a href="/admin/forget" class="ici">Cliquer ici</a> .</p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- Fin modal -->

        <?= $content ?>
        </div>
    </body>
</html>
