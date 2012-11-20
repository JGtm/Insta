<?php

error_reporting(E_ALL);



if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}


require_once('class.pizza.php');

class Modele_ingredient
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $nom = null;
    public $quantit� = null;
    public $actif = null;

    // --- OPERATIONS ---
}

/* end of class Modele_Modele_ingredient */
?>