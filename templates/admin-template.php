<?php
if (isset($_SESSION['identifiant'])) {
    ?>

    <!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="../contenu/css/bootstrap.min.css" rel="stylesheet">
    <link rel="../contenu/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/contenu/css/styleadmin.css">

    <!-- Summernote -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
</head>

<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-sm-2 col-xs-12 menu_admin">
            <div class="page-header">
                <h1 class="titre">Panneau d'administration</h1>
                <h3 class="namesession">Bienvenu <?php echo $_SESSION['identifiant']; ?></h3>
            </div>
            <nav>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href='/admin/list' class="names">Liste des messages</a></li>
                    <li><a href='/admin/create' class="names">Créer</a></li>
                    <li><a href='/admin/updateuser' class="names">Identifiant et mot de passe</a></li>
                    <li><a href='/admin/exit' class="names">Sortir</a></li>
                </ul>
            </nav>
        </div>

        <?= $content ?>
    </div>
</div>

</body>

    <?php
}    else {
    header('Location:/');
}
