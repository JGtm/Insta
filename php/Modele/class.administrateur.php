<?php

error_reporting(E_ALL);


if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}


require_once('class.utilisateur.php');

class Modele_administrateur extends Modele_utilisateur
{

    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---
    // --- OPERATIONS ---
    function __construct($nom, $prenom, $email, $mdp)
    {
        Modele_utilisateur::__construct($nom, $prenom, $email, $mdp, 'SBO');
    }

    public function crudEmploye()
    {
        
    }

    public function crudProduit()
    {
        
    }

    public function crudIngredient()
    {
        
    }

    public function updateAdmin()
    {
        
    }

    public function crudTypeProduit()
    {
        
    }

}

/* end of class Modele_Modele_administrateur */
?>