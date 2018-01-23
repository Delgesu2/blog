<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>
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
    <!-- En-tête jumbotron -->
        <?php
        include ('header.html');
        ?>
    <!-- fin en-tête jumbotron -->
        <?= $content ?>
        </div>
    </body>
</html>
