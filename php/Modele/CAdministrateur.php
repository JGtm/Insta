<?php

require_once('CUtilisateur.php');

class CAdministrateur extends CUtilisateur
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