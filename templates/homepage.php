<?php
$title = 'Xavier COUTANT - Blog';
ob_start();
?>

    <!-- main content -->
    <div class="main-content bottom-0">
        <div class="container">
            <!-- banner -->
            <div class="banner pad">
                <!-- heading -->
                <div class="titre">
                <h2>Bienvenue sur le site de<br><span>Xavier Coutant</span></h2>
                <!-- paragraph -->
                <p>Développeur web</p>
                </div>
            </div>
        </div>

        <!-- hero -->
        <div class="hero pad">
            <div class="container">
                <div class="hero-content">
                    <!-- heading -->
                    <h2>Collaborons pour un projet en confiance</h2>
                    <!-- paragraph -->
                    <p>Confidentialité assurée</p>
                </div>
            </div>
        </div>

        <!-- benefits -->
        <div class="benefits pad">
            <div class="container">
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Technologies</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- benefits item -->
                        <div class="benefits-item">
                            <!-- icon -->
                            <img src="../contenu/images/php.png" alt="PHP" height="80" width="80">
                            <!-- heading -->
                            <!--<h3>PHP</h3> -->
                            <!-- paragraph -->
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- benefits item -->
                        <div class="benefits-item">
                            <!-- icon -->
                            <img src="../contenu/images/symfony_black_03.png" alt="PHP" height="80" width="80">
                            <!-- heading -->
                          <!--  <h3>Symfony</h3> -->
                            <!-- paragraph -->
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- benefits item -->
                        <div class="benefits-item">
                            <!-- icon -->
                            <img src="../contenu/images/drupal8.png" alt="PHP" height="80" width="80">
                            <!-- heading -->
                        <!-- <h3>Drupal</h3> -->
                            <!-- paragraph -->
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- benefits item -->
                        <div class="benefits-item">
                            <!-- icon -->
                            <img src="../contenu/images/mysql-170x115.png" alt="PHP" height="80" width="100">
                            <!-- heading -->
                         <!-- <h3>MySQL</h3> -->
                            <!-- paragraph -->
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- call to action -->
        <div class="cta">
            <div class="container">
                <div class="cta-content">
                    <!-- heading -->
                    <h3>ainsi que ...</h3>
                    <!-- paragraph -->
                    <p>... Javascript - frameworks front-end: Bootstrap, Bulma - tests unitaires et fonctionnels: PHPUnit</p>
                </div>
            </div>
        </div>

        <!-- testimonial -->
        <div class="testimonial">
            <div class="container anim">
                <h1>Passionné de
                    <span
                        class="txt-rotate"
                        data-period="2000"
                        data-rotate='[ "technologie.", "développement web.", "PHP.", "Symfony.", "back-end.",
                         "front-end.", "Javascript."]'>
                    </span>
                </h1>
            </div>
        </div>

        <!-- blog -->
        <div class="blog pad">
            <div class="container">
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Blog</h2>
                </div>
                <div class="row">

                    <div class="list-wrapper">

                    <?php if (!empty($billets)) {
                        // Boucle affichage : récupération des lignes de la table post
                        foreach ($billets as $post): ?>

                        <div class="list-item">
                            <div class="col-md-5">
                                <!-- blog entry -->
                                <div class="entry">
                                    <!-- blog content details -->
                                    <div class="entry-post">
                                        <!-- blog information -->
                                        <span class="meta">Le <?= $post->getDatecreation(); ?></span>
                                        <div class='badge badge primary'><?= $post->getDatemaj(); ?></div>
                                        <!-- blog title -->
                                        <h3><a href="/post/details/<?= $post->getId(); ?>"><h3 class='titrepost'><?= $post->getTitre(); ?></h3></a></h3>
                                        <!-- chapo -->
                                        <h5><?= $post->getChapo(); ?></h5>
                                        <!-- paragraph -->
                                        <p><?= $post->getContenu(); ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <?php endforeach;
                    } else
                        echo '<h3>Pas de billet à lire</h3>';
                    ?>

                    </div>

                </div>

                <div class="row">
                    <div class="col-xs-offset-5">
                        <div id="pagination-container"></div>
                    </div>
                </div>

            </div>



        </div>

    </div>

    <script src="../contenu/js/jquery.js"></script>
    <script type="text/javascript" src="../contenu/js/jquery.simplePagination.js"></script>

    <script>
        var items = $(".list-wrapper .list-item");
        var numItems = items.length;
        var perPage = 2;

        items.slice(perPage).hide();

        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            cssStyle: 'light-theme',
            prevText: "&lsaquo;",
            nextText: "&rsaquo;",
            onPageClick: function(pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    </script>

<?php
$content = ob_get_clean();
require ('template.php');
?>