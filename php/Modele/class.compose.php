<?php

error_reporting(E_ALL);



if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}

require_once('class.commande.php');


require_once('class.produit.php');

class Modele_compose
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $numeroCommande = null;
    public $quantite = null;
    public $nomProduit = null;
    public $prixQdPrix = null;

    // --- OPERATIONS ---
}

/* end of class Modele_Modele_compose */
?>