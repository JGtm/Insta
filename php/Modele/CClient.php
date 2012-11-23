<?php

require_once('CCommande.php');
require_once('CBdd.php');
require_once('CUtilisateur.php');

class CClient extends CUtilisateur
{

    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 
    // --- ATTRIBUTES ---


    private $adresse = '';
    private $code_postal = '';
    private $telephone = '';
    private $ville = '';

    // --- OPERATIONS ---
    function __construct($nom='', $prenom='', $email='', $mdp='', $adresse='', $code_postal='', $ville='', $telephone='')
    {
            parent::__construct($nom, $prenom, $email, $mdp, 'FO');
        

        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->telephone = $telephone;
        $this->ville = $ville;
    }

    function InsertClient()
    {
        $bdd = new CBdd();
        $acn = $bdd->seConnecter();

        $lsSQL = "INSERT INTO utilisateurs(email,mdp,nom,prenom,adresse,code_postal,ville,telephone,qualite) VALUES(?,?,?,?,?,?,?,?,?)";
        $lcmd = $acn->prepare($lsSQL);
        $tValeurs = array();
        $tValeurs[] = $this->email;
        $tValeurs[] = $this->mdp;
        $tValeurs[] = $this->nom;
        $tValeurs[] = $this->prenom;
        $tValeurs[] = $this->adresse;
        $tValeurs[] = $this->code_postal;
        $tValeurs[] = $this->ville;
        $tValeurs[] = $this->telephone;
        $tValeurs[] = $this->qualite;

        $lcmd->execute($tValeurs);
        $bdd->seConnecter();
    }

    public function updateClient()
    {
        
    }
    

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getCode_postal()
    {
        return $this->code_postal;
    }

    public function setCode_postal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

}

/* end of class Modele_Modele_client */
?>