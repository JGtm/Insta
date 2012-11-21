<?php

require_once('CCommande.php');


require_once('CUtilisateur.php');

class CClient extends CUtilisateur
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
            parent::__construct($nom, $prenom, $email, $mdp, 'FO');
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