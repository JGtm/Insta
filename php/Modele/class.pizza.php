<?php

error_reporting(E_ALL);



if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}

require_once('class.ingredient.php');

require_once('class.produit.php');

class Modele_pizza extends Modele_produit
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $base = null;
    public $taille = null;

    // --- OPERATIONS ---
}

/* end of class Modele_Modele_pizza */
?>