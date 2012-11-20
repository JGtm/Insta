<?php

error_reporting(E_ALL);



if (0 > version_compare(PHP_VERSION, '5'))
{
    die('This file was generated for PHP 5');
}

require_once('class.commande.php');


require_once('class.utilisateur.php');

class Modele_client extends Modele_utilisateur
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    public $adresse = '';
    public $code_postal = '';
    public $telephone = '';
    public $ville = '';

    // --- OPERATIONS ---
    function __construct($nom, $prenom, $email, $mdp, $adresse, $code_postal, $telephone, $ville)
    {

        function __construct($nom, $prenom, $email, $mdp)
        {
            Modele_utilisateur::__construct($nom, $prenom, $email, $mdp, 'FO');
        }

        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->telephone = $telephone;
        $this->ville = $ville;
    }

    public function updateClient()
    {
        
    }

}

/* end of class Modele_Modele_client */
?>