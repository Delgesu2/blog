blog
====

Projet 5 - Parcours développeur d'application PHP/Symfony - OpenClassrooms
--------------------------------------------------------------------------

### ___Installation sur serveur___ 

Une fois le site déployé, le dossier racine doit être /public . Faire pointer le _virtual host_ sur celui-ci.

### ___Connexion à la BDD___

Pour pouvoir lire la page 'blog' du site, vous devez paramétrer votre base de données.

* Utilisez le fichier script *monblog.sql* pour la création de la BDD et son remplissage.
* Retranscrivez ces données dans le fichier /App/DBFactory.php ligne 15:

    * `'mysql:host=nom_hote;dbname=nom_de_la_bdd;charset=utf8','votre_nom_utilisateur','mot_de_passe'`
 
* La partie publique du site est accessible. 

### ___Partie administration___

Afin d'accéder à la partie _administration_, vous devrez définir vos propres identifiant et mot de passe. Par défaut, ils sont: 

identifiant: `albator`    mot de passe: `Tagada71` 

Utilisez-les pour accéder à la partie administration et les changer immédiatement. N'oubliez pas de définir une adresse mail. Elle sera utile en cas de perte du mot de passe.
Le mot de passe doit comporter au moins **1 majuscule**, **1 chiffre**, et au minimum **8 caractères** en tout.


### ___Formulaire de contact___

Il y a 3 fichiers à modifier.

* `/config/mailer.php` contient un tableau qui doit être renseigné afin de rendre fonctionnels le formulaire de contact et le système de récupération du mot de passe.
    * 'smtp' : l'adresse de votre serveur smtp
    * 'username' : votre identifiant pour le serveur, souvent une adresse courriel
    * 'password' : le mot de passe
    * 'from' : l'adresse de l'administrateur, par exemple contact@monblog.com
    * 'to' : adresse de réception des messages
    
* `/src/Controller/ContactController.php`: 
    * ligne 25, indiquez le numéro du port, et spécifiez obligatoirement s'il s'agit d'un port SSL en écrivant comme dernier paramètre 'ssl' 
exemple: `$transport = (new \Swift_SmtpTransport($data['smtp'], 465, 'ssl'))`
    * Ligne 37, vous pouvez personnaliser le nom de l'administrateur ('Mon site-blog' par défaut).
    
* `/src/Controller/TokenController.php`:
 Opérez exactement de la même manière que précédemment.
 
 _Et voilà !_ Normalement, vous êtes bons pour utiliser le blog, le personnaliser, mettre vos propres messages ...
 
 Pour voir le mien et lire quelques actualités et (qui sait ...) observer quelques améliorations visuelles, venez visiter de temps en temps cette adresse:
 
 [https://p5blog.devxdemo.eu/](https://p5blog.devxdemo.eu/ "Mon site")
 
 À bientôt ...
 
 
