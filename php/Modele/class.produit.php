<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}


require_once('class.compose.php');

class Modele_produit
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $nom = null;
    public $description = null;
    public $type = null;
    public $actif = null;
    public $prix = null;

    // --- OPERATIONS ---
}

/* end of class Modele_Modele_produit */
?>