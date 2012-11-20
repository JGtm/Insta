<?php

require_once('class.utilisateur.php');

class Modele_employe extends Modele_utilisateur
{

    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---
    // --- OPERATIONS ---

    function __construct($nom, $prenom, $email, $mdp)
    {
        parent::__construct($nom, $prenom, $email, $mdp, 'BO');
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