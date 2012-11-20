<?php

error_reporting(E_ALL);

/**
 * Pizzeria - Modele/Modele/class.commande.php
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
 * include Modele_Modele_client
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Modele/Modele/class.client.php');

/**
 * include Modele_Modele_compose
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Modele/Modele/class.compose.php');

/* user defined includes */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AE0-includes begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AE0-includes end

/* user defined constants */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AE0-constants begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AE0-constants end

/**
 * Short description of class Modele_Modele_commande
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package Modele
 * @subpackage Modele
 */
class Modele_Modele_commande
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute numero
     *
     * @access public
     * @var Integer
     */
    public $numero = null;

    /**
     * Short description of attribute client
     *
     * @access public
     * @var client
     */
    public $client = null;

    /**
     * Short description of attribute etat
     *
     * @access public
     * @var String
     */
    public $etat = null;

    /**
     * Short description of attribute prixTotal
     *
     * @access public
     * @var Integer
     */
    public $prixTotal = null;

    /**
     * Short description of attribute date
     *
     * @access public
     * @var String
     */
    public $date = null;

    // --- OPERATIONS ---

    /**
     * Short description of method crudProduit
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function crudProduit()
    {
        // section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000B00 begin
        // section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000B00 end
    }

    /**
     * Short description of method calculPrixTotal
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function calculPrixTotal()
    {
        // section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000B02 begin
        // section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000B02 end
    }

} /* end of class Modele_Modele_commande */

?>