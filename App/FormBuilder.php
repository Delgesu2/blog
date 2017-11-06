<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 28/10/17
 * Time: 19:49
 */

namespace App;

use Framework\Modele\Post;


class FormBuilder
{
    private $entity;
    private $data;
    private $values;

    public function handleRequest(array $request)
        // Vérifie présence de données et appel des setters
    {
        if ($this->entity != null)
        {
            $this->entity->setTitre($request['titre']);
        }

        if ($this->data != null)
        {
            $this->data->setChapo()
        }
    }
}