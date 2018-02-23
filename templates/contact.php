<?php
$title = 'Xavier COUTANT - Blog';
ob_start();
?>

<div class='row text-center'>
    <h2 class="soustitre">Pour me contacter</h2>
</div>

<div class="row panel4">
    <!-- Formulaire de contact -->
    <form action="../App/mailer.php" method="post" class="col-xs-6">
        <legend>Envoyer un message</legend>

        <label for="civilit&#233;">Civilit&#233; : </label>
        <select id="civilite" name="civilite">
            <option value="mr">
                Monsieur
            </option>
            <option value="mme">
                Madame
            </option>
        </select>

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input id="nom" type="text" name="nom" class="form-control" placeholder="Champ obligatoire"
                   maxlenght="60"  required />
        </div>

        <div class="form-group">
            <label for="prenom">Pr&#233;nom :</label>
            <input id="prenom" type="text" name="prenom" class="form-control" maxlenght="60" >
        </div>

        <div class="form-group">
            <label for="email">Courriel :</label>
            <input id="email" type="email" name="email" class="form-control" placeholder="Champ obligatoire"
                   required />
        </div>

        <div class="form-group">
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" class="form-control" value="<?php echo (isset($_POST['sujet'])) ? $sujet : '' ?>" maxlenght="160"
            />
        </div>

        <div class="form-group">
            <label for="message">Message : </label>
            <textarea id="message" type="textarea" name="message" class="form-control" rows="6" placeholder="Champ obligatoire" required /></textarea>
        </div>

        <input type="submit" name="envoye" value="Envoyer" />
    </form>
    <!-- fin formulaire de contact -->
</div>

<?php
$content = ob_get_clean();
require ('public-template.php');
