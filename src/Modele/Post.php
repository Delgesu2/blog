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
    public $datecreation;

    /**
     * @var date mise-à-jour éventuelle du billet
     */
    public $datemaj;


    // getters et setters

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id=$id;
    }

    /**
     * @return titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param titre $string
     */
    public function setTitre($string)
    {
        $this->titre=$string;
    }

    /**
     * @return chapo
     */
    public function getChapo()
    {
        return $this->chapo;
    }

    /**
     * @param chapo $string
     */
    public function setChapo($string)
    {
        $this->chapo=$string;
    }

    /**
     * @return date creation
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param date
     */
    public function setDatecreation($datecrea)
    {
        $this->datecreation=$datecrea;
    }

    /**
     * @return date
     */
    public function getDatemaj()
    {
        return $this->datemaj;
    }

    /**
     * @param date $date_maj
     */
    public function setDatemaj($datemaj)
    {
        $this->datemaj=$datemaj;
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
        $this->contenu=$contenu;
    }

}
