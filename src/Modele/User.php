<?php
/**
 * Created by PhpStorm.
 * User: ronsard
 * Date: 09/09/17
 * Time: 19:50
 */

namespace Framework\Modele;

class User
{
    /**
     * @var id utilisateur
     */
    public $id;

    /**
     * @var nom identifiant
     */
    public $identifiant;

    /**
     * @var mot de passe
     */
    public $mdp;

    /**
     * @var adresse courriel
     */
    public $courriel;


    // getters et setters

    /**
     * @return nom
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param nom $identifiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return mot
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mot $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return adresse
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * @param adresse $courriel
     */
    public function setCourriel($courriel)
    {
        $this->courriel = $courriel;
    }

    /**
     * @param id $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}