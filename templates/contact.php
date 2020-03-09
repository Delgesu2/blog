<?php
$title = 'Xavier COUTANT - Contact';
ob_start();
?>

<div class="main-content" style="background-image: none">
    <div class="container">

        <div class='row text-center'>
            <h2 class="soustitre">Pour me contacter</h2>
        </div>

        <div class="row panel4">
            <!-- Formulaire de contact -->
            <form action="/contact/envoi" method="post" class="col-md-10 col-sm-10 col-xs-12">
                <legend>Envoyer un message</legend>

                <label for="civilit&#233;">Civilit&#233; : </label>
                <select id="civilite" name="civilite">
                    <option value="Monsieur">
                        Monsieur
                    </option>
                    <option value="Madame">
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
                    <input id="email" type="email" name="email" class="form-control" placeholder="Champ obligatoire" required />
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet :</label>
                    <input type="text" id="sujet" name="sujet" class="form-control" maxlenght="160"
                    />
                </div>

                <div class="form-group">
                    <label for="message">Message : </label>
                    <textarea id="message" type="textarea" name="message" class="form-control" rows="6" placeholder="Champ obligatoire" required /></textarea>
                </div>

                <button type="submit">Envoyer</button>
            </form>
            <!-- fin formulaire de contact -->
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();
require ('template.php');
?>

