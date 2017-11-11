<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 08/11/17
 * Time: 12:30
 */

namespace App;


class Route
{
    private $path;
    private $controller;

    public function __construct($path, $controller)
    {
        $this->path = $path;
        $this->controller = $controller;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    public function getController()
    {
        return $this->controller();
    }
}