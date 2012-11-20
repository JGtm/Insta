<?php

error_reporting(E_ALL);



if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}


require_once('class.client.php');


require_once('class.compose.php');

class Modele_commande
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $numero = null;
    public $client = null;
    public $etat = null;
    public $prixTotal = null;
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