<?php

require_once('CUtilisateur.php');
require_once ('CBdd.php');

class CAdministrateur extends CUtilisateur
{

    // --- ASSOCIATIONS ---
    // --- ATTRIBUTES ---
    private static $instance;
    private $bdd;
    // --- OPERATIONS ---
   protected function __construct($nom='', $prenom='', $email='', $mdp='')
    {
        parent::__construct($nom='', $prenom='', $email='', $mdp='', 'SBO');
        $this->bdd=new CBdd();
        $acn=$this->bdd->seConnecter();
        $tab=array
                    (
                    'mdp' => $_SESSION['mdp'],
                    'email'=> $_SESSION['email']
                    );
        $Utilisateur = $this->bdd->selectionner1($acn, 'Utilisateurs', '*', $tab);
 
        $this->setEmail($Utilisateur[1]);
        $this->setMdp($Utilisateur[2]);
        $this->setNom($Utilisateur[3]);
        $this->setPrenom($Utilisateur[4]);
        $this->setQualite($Utilisateur[5]);
        
    }
    public static function getInstance()
    {
        if (!isSet(self::$instance))
        {
            $classe = __CLASS__;
            self::$instance = new $classe();
            //echo "<br />La classe est instanciee";
        }
        else
            echo "<br />La classe est deja instanciee";
        return self::$instance;
    }
    
        public function __clone()
    {
        trigger_error('Le clonage est interdit.', E_USER_ERROR);
    }

    public function crudEmploye()
    {
        
    }

    public function crudProduit()
    {
        
    }

    public function crudIngredient()
    {
        
    }

    public function updateAdmin()
    {
        
    }

    public function crudTypeProduit()
    {
        
    }

}

/* end of class Modele_Modele_administrateur */
?>