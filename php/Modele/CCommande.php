<?php

require_once('CClient.php');


require_once('CCompose.php');

class CCommande
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