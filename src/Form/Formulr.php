<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 20/10/17
 * Time: 11:52
 */

namespace Framework\Form;

/**
 * Class AbstractForm     // Crée le formulaire
 * @package Framework\Form
 */
class Formulr
{
    /**
     * @var
     */
    public $data;

    /**
     * Form constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this -> data = $data;
    }

    /**
     * Eléments du formulaire
     */
    public function StartForm($method, $path)
    {
        echo "<form method='.$method.' action='.$path.'>";
    }

    public function input ($type)
    {
        echo "<input type='. $type .'/>";
    }

    public function option ()
    {
        /** Garde l'option choisie en cas de rechargement de la page */
        echo "<select id='civilite' name='civilite'>
                            <option 
                                value='mr' '. 
                                                                       
                                    if (!isset($_POST[civilite]) || $_POST[civilite] == 'mr')  
                                    {
                                        echo ' selected='selected' ';
                                    }   . ' >
                            Monsieur
                            </option>
        
                            <option
                                value='mme' '.

                                    if (isset($_POST[civilite]) && $_POST[civilite] == 'mme')
                                    {
                                        echo ' selected='selected' ';
                                    } . ' >
                             Madame
                            </option>
            </select>" ;
    }

    public function submit()
    {
        echo "<button type='submit'>Validez</button>";
    }

    public function EndForm()
    {
        echo "</form>";
    }
}
