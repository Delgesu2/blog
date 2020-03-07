<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 15/12/17
 * Time: 17:52
 */

namespace Framework\Controller;


class Vue
{
    // nom du fichier associé à la vue
    private $fichier;
    // Titre de la vue (défini dans le fichier vue)
    private $titre;

    public function __construct($action)
    {
        // Détermination du nom du fichier vue à partir de l'action
        $this->fichier = "Vue/vue" . $action . ".php";
    }

    // générer et afficher la vue
    public function generer($data)
    {
        // Partie spécifique de la vue
        $contenu = $this->genererFichier($this->fichier, $data);
        // Gabarit commun
        $vue = $this->genererFichier('Vue/gabarit.php', array('titre'=>$this->titre, 'contenu'=>$contenu));
        // Renvoi de la vue au navigateur
        echo $vue;
    }

    // génére un fichier vue et renvoie le résultat produit
    private function genererFichier($fichier, $data)
    {
        if (file_exists($fichier))
        {
            // Rend les éléments du tableau $data acessibles dans la vue
            extract($data);

            // temporisation de la sortie
            ob_start();

            require $fichier;

            // arrêt de la temporisation et renvoi du tampon de sortie
            return ob_get_clean();
        }

        else
        {
            throw new \Exception("Fichier '$fichier' introuvable");
        }
    }


}