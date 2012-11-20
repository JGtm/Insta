<?php

error_reporting(E_ALL);

/**
 * Pizzeria - Modele/Modele/class.ingredient.php
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
 * include Modele_Modele_pizza
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('Modele/Modele/class.pizza.php');

/* user defined includes */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AC6-includes begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AC6-includes end

/* user defined constants */
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AC6-constants begin
// section -64--88-16-102-62275809:13b08439a4f:-8000:0000000000000AC6-constants end

/**
 * Short description of class Modele_Modele_ingredient
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 * @package Modele
 * @subpackage Modele
 */
class Modele_Modele_ingredient
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
     * Short description of attribute quantitŽ
     *
     * @access public
     * @var Integer
     */
    public $quantitŽ = null;

    /**
     * Short description of attribute actif
     *
     * @access public
     * @var Boolean
     */
    public $actif = null;

    // --- OPERATIONS ---

} /* end of class Modele_Modele_ingredient */

?>