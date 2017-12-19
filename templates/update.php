<?php

include ('menu_admin.html');

?>

<div class="col-sm-10">
    <h1 class="text-center">Modifier un post</h1>

   
    <form method="post" action="../controleur/ctrl_update.php">
        <div class="form-group">
        <label for="titre">Titre:</label>
        <input class="form-control" type="text" name="titre" id="titre" value="<?php if (isset ($_GET['id'])) {echo $data['titre'];} ?>">
        </div>

        <div class="form-group">
        <label for="chapo">Chap&#244;:</label><br/>
        <textarea class="form-control" name="chapo" id="chapo" rows="3" cols="10"><?php if (isset($_GET['id'])) {echo $data['chapo'];} ?></textarea>
        </div>

        <!-- Editeur Summernote -->
        <div class="form-group">
        <label for="summernote">Texte:</label>
        <textarea name="contenu" id="summernote"><?php if (isset($_GET['id'])) {echo $data['contenu'];} ?></textarea>
        </div>

        <input type="hidden" name="id" value="<?= $data['id']; ?>" />


        <button type="submit">Envoyer</button>
    </form>
</div>


    <!-- script éditeur -->
    <script>
$(document).ready(function() {
    $('#summernote').summernote({
                height: 450
                            });
        });
    </script>

</body>

</html>



