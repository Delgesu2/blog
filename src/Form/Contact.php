<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 26/10/17
 * Time: 16:42
 */

namespace Framework\Form;


class Contact extends AbstractForm
{
    public function option ()
    {
        /** Garde l'option choisie en cas de rechargement de la page */
        echo "<select id='civilite' name='civilite'>
                            <option 
                                value='mr' '.                                                                        
                                    if (!isset($_POST["civilite"]) || $_POST["civilite"] == 'mr')
                                    {
                                        echo ' selected='selected' ';
                                    } . ' >
                            Monsieur
                            </option>
        
                            <option
                                value='mme' '.
                                    if (isset($_POST["civilite"]) && $_POST["civilite"] == 'mme')
                                    {
                                        echo ' selected='selected' ';
                                    } . ' >
                             Madame
                            </option>
            </select>" ;
    }
}