<?php
ob_start();
?>

<div class="col-sm-10 col-xs-12">
    <h1 class="text-center">Modifier un post</h1>

   
    <form method="post" action="/admin/updatepost_action">
        <div class="form-group">
        <label for="titre">Titre:</label>
        <input class="form-control" type="text" name="titre" id="titre" value="<?php echo $billet_recup->getTitre(); ?>">
        </div>

        <div class="form-group">
        <label for="chapo">Chap&#244;:</label><br/>
        <textarea class="form-control" name="chapo" id="chapo" rows="3" cols="10"><?php echo $billet_recup->getChapo(); ?></textarea>
        </div>

        <!-- Editeur Summernote -->
        <div class="form-group">
        <label for="summernote">Texte:</label>
        <textarea name="contenu" id="summernote"><?php echo $billet_recup->getContenu(); ?></textarea>
        </div>

        <input type="hidden" name="id" value="<?= $billet_recup->getId(); ?>" />


        <button type="submit">Envoyer</button>
    </form>
</div>


<!-- script éditeur -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link']],
                ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']]
            ]
        });
    });
</script>

<?php
$content = ob_get_clean();
require ('admin-template.php');
?>

