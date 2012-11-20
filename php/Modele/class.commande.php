<?php

require_once('class.client.php');


require_once('class.compose.php');

class Modele_commande
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $numero = null;
    public $client = null;
    public $etat = '';
    public $prixTotal = 0;
    public $date = null;

    // --- OPERATIONS ---


    public function crudProduit()
    {
        
    }

    public function calculPrixTotal()
    {
        
    }

}

/* end of class Modele_Modele_commande */
?>