<?php

error_reporting(E_ALL);

/**
 * Pizzeria - Modele/Modele/class.produit.php
 *
 * $Id$
 *
 * This file is part of Pizzeria.
 *
 * Automatically generated on 20.11.2012, 10:58:29 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 * @package Modele
 * @subpackage Modele
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Modele_Modele_compose
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Modele/Modele/class.compose.php');

/* user defined includes */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AAD-includes begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AAD-includes end

/* user defined constants */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AAD-constants begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AAD-constants end

/**
 * Short description of class Modele_Modele_produit
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package Modele
 * @subpackage Modele
 */
class Modele_Modele_produit
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute nom
     *
     * @access public
     * @var String
     */
    public $nom = null;

    /**
     * Short description of attribute description
     *
     * @access public
     * @var String
     */
    public $description = null;

    /**
     * Short description of attribute type
     *
     * @access public
     * @var String
     */
    public $type = null;

    /**
     * Short description of attribute actif
     *
     * @access public
     * @var Boolean
     */
    public $actif = null;

    /**
     * Short description of attribute prix
     *
     * @access public
     * @var Integer
     */
    public $prix = null;

    // --- OPERATIONS ---

} /* end of class Modele_Modele_produit */

?>