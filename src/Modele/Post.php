<?php

/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 09/09/17
 * Time: 19:38
 */

namespace Framework\Modele;

class Post
{
    public $id;

    /**
     * @var titre du billet
     */
    public $titre;

    /**
     * @var chapo du billet
     */
    public $chapo;

    /**
     * @var contenu du billet
     */
    public $contenu;

    /**
     * @var date création du billet
     */
    public $date_creation;

    /**
     * @var date mise-à-jour éventuelle du billet
     */
    public $date_maj;


    // getters et setters

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return date
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param date $date_maj
     */
    public function setTitre($string)
    {
        $this->titre=$string;
    }

    /**
     * @return date
     */
    public function getChapo()
    {
        return $this->chapo;
    }

    /**
     * @param date $date_maj
     */
    public function setChapo($string)
    {
        $this->chapo=$string;
    }

    /**
     * @return date
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param date $date_maj
     */
    public function setDateCreation($datecrea)
    {
        $this->date_creation=$datecrea;
    }

    /**
     * @return date
     */
    public function getDateMaj()
    {
        return $this->date_maj;
    }

    /**
     * @param date $date_maj
     */
    public function setDateMaj($date_maj)
    {
        $this->date_maj = $date_maj;
    }

    /**
     * @return contenu
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param contenu $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }



}
