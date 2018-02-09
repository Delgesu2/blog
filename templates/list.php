<?php
ob_start();
?>

<div class="col-sm-10">
    <h1 class="text-center">Liste des messages</h1>
    <h2 class="text-center">Modifier ou supprimer</h2>

    <div class="row">
        <div class="col-sm-12 table-responsive">
            <table class="table table-striped table-condesed">
                <thead>
                    <tr>
                        <th>Titre</th> <th>Cr&#233;&#233; le</th> <th>Modifié le</th> <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <!-- Boucle affichage : récupération des lignes de la table post-->
                <?php foreach ( $billets_admin as $post):
                    {
                        echo '<tr> <td>' . $post->getTitre() . '</td><td>' . $post->getDatecreation() .
                        '</td><td>' . $post->getDatemaj() . '</td>
                        <td><div class="btn-group">
                            <a class="btn btn-primary btn-sm" href="/admin/update/{' . $post->getId() . '}" >Modifier</a>
                            <a class="btn btn-danger btn-sm"  href="/admin/delete/{' . $post->getId() . '}" >Supprimer</a>
                            </div> 
                        </td> </tr> <br/>';
                    }
                  endforeach;
                ?>
                        <!-- Fin boucle -->
                    
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require ('admin-template.php');
?>