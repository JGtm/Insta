<?php

require_once('class.utilisateur.php');

class Modele_administrateur extends Modele_utilisateur
{

    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---
    // --- OPERATIONS ---
    function __construct($nom, $prenom, $email, $mdp)
    {
        parent::__construct($nom, $prenom, $email, $mdp, 'SBO');
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