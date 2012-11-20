<?php

error_reporting(E_ALL);



if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}

require_once('class.utilisateur.php');

class Modele_employe extends Modele_utilisateur
{

    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---
    // --- OPERATIONS ---

    function __construct($nom, $prenom, $email, $mdp)
    {
        Modele_utilisateur::__construct($nom, $prenom, $email, $mdp, 'BO');
    }

    public function updateEtatCommande()
    {
        
    }

    public function updateEmploye()
    {
        
    }

}

/* end of class Modele_Modele_employe */
?>