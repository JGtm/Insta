<?php

error_reporting(E_ALL);

/**
 * Pizzeria - Modele/Modele/class.client.php
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
 * include Modele_Modele_commande
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Modele/Modele/class.commande.php');

/**
 * include Modele_Modele_utilisateur
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Modele/Modele/class.utilisateur.php');

/* user defined includes */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000A92-includes begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000A92-includes end

/* user defined constants */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000A92-constants begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000A92-constants end

/**
 * Short description of class Modele_Modele_client
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package Modele
 * @subpackage Modele
 */
class Modele_Modele_client
    extends Modele_Modele_utilisateur
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute adresse
     *
     * @access public
     * @var String
     */
    public $adresse = null;

    /**
     * Short description of attribute code_postal
     *
     * @access public
     * @var String
     */
    public $code_postal = null;

    /**
     * Short description of attribute telephone
     *
     * @access public
     * @var String
     */
    public $telephone = null;

    /**
     * Short description of attribute ville
     *
     * @access public
     * @var String
     */
    public $ville = null;

    // --- OPERATIONS ---

    /**
     * Short description of method updateClient
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateClient()
    {
        // section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AA7 begin
        // section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AA7 end
    }

} /* end of class Modele_Modele_client */

?>