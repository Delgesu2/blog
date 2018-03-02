<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 02/03/18
 * Time: 17:20
 */
namespace Framework\Modele;

class Token
{
    /**
     * @int
     */
    public $id;

    /**
     * @param string
     */
    public $token;


    //
    /**
     * @return id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

}
