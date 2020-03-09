<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?= $title ?></title>
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Styles -->
        <!-- Bootstrap CSS -->
        <link href="../contenu/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="../contenu/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../contenu/css/style.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="../contenu/css/simplePagination.css"/>

        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="#">
    </head>

<body>

<div class="wrapper">
    <!-- header -->
    <header>
        <!-- navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#"><img class="img-responsive" src="img/logo.png" alt="Logo" /></a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" id="navigation">
                        <li class="bouton"><a href="/">Accueil</a></li>
                        <li class="bouton"><a href="/contact">Contact</a></li>
                        <li class="bouton"><a href="/connexion">Connexion</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>


            <?= $content ?>


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row footer">
                <div class="col-xs-offset-3 col-sm-offset-5 col-xs-9">
                    <a href="https://www.linkedin.com/in/xavier-coutant-webdev">
                        <img src="contenu/images/linkedin-logo.png" alt="LikedIn" title="LinkedIn"   class="icon">
                    </a>
                    <a href="contenu/CV_XavierCoutant.pdf">
                        <img src="contenu/images/cv.png" alt="CV" title="t&#233;l&#233;charger mon CV" class="icon">
                    </a>
                    <a href="https://github.com/Delgesu2/blog">
                        <img src="contenu/images/octocat.png" alt="Github" title="Github" class="icon">
                    </a>
                </div>
            </div>
        </div>
    </footer>

</div>


        <!-- Javascript files -->
        <!-- jQuery -->
        <script src="../contenu/js/jquery.js"></script>
        <!-- Bootstrap JS -->
        <script src="../contenu/js/bootstrap.min.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="../contenu/js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="../contenu/js/html5shiv.js"></script>
        <!-- Custom JS -->
        <script src="../contenu/js/custom.js"></script>

    </body>
</html>
