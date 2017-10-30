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
class AbstractForm
{
    /**
     * @var
     */
    protected $data;

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

    public function submit()
    {
        echo "<button type='submit'>Validez</button>";
    }

    public function EndForm()
    {
        echo "</form>";
    }
}
