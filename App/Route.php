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
    private $requirements;

    /**
     * Route constructor.
     * @param $path    route's path
     * @param $controller  back-end controller to be called
     */
    public function __construct($path, $controller, $requirements)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->requirements = $requirements;
    }

    /**
     * @return mixed
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param Route $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
}