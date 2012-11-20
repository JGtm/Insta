<?php

error_reporting(E_ALL);

/**
 * Pizzeria - Modele/Modele/class.utilisateur.php
 */
if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}

abstract class Modele_utilisateur
{

    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---

    protected $nom = '';
    protected $prenom = '';
    protected $email = '';
    protected $mdp = '';
    protected $qualite = '';

    // --- OPERATIONS ---
    //---Constructeur---
    protected function __construct($nom, $prenom, $email, $mdp, $qualite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->qualite = $qualite;
    }

}

/* end of abstract class Modele_Modele_utilisateur */
?>