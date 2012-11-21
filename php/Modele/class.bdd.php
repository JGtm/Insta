<?php

/*
  SINGLETON
 */

class Modele_bdd
{

    ////////////////////////////////////////////
    //Variables/////////////////////////////////
    ////////////////////////////////////////////
    private static $instance;
    private $pilote = 'mysql';
    private $serveur = 'localhost';  //serveur
    private $port = '3306';           //port de connexion
    private $ut = 'root';            //utilisateur  
    private $mdp = '';                //mot de passe
    private $bd = 'Pizzeria';       //nom base de donnee

    /////////////////////////////////////////////
    //Constructeur///////////////////////////////
    /////////////////////////////////////////////

    private function __construct()
    {
        
    }

    // --- La methode getInstance() permet en mode derive l'instanciation unique
    public static function getInstance()
    {
        if (!isSet(self::$instance))
        {
            $classe = __CLASS__;
            self::$instance = new $classe();
            self::seConnecter();
            //echo "<br />La classe est instanciee";
        }
        else
            echo "<br />La classe est deja instanciee";
        return self::$instance;
    }

    /////////////////////////////////////////////
    //fonctions//////////////////////////////////
    /////////////////////////////////////////////
    //
    //---Fonction de connexion a la base de donnée---
    public function seConnecter()
    {
        //---on essaye d'executer des instructions qui pourraient generer des erreurs!
        try
        {
            //----on se connecte en utilisant les parametres
            $lcn = new PDO(self::$instance->getPilote() . ":host=" . self::$instance->getServeur() . ";dbname=" . self::$instance->getBd() . ";port=" . self::$instance->getPort(), self::$instance->getUt(), self::$instance->getMdp());
            //---on modifie un des attribut par default pour gerer les erreur sur tt le script pas seulement sur la connection
            $lcn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $lcn->exec("SET NAMES 'UTF8'");
        }
        //on attrape les erreur a ce niveau
        catch (PDOException $e)
        {
            $lcn = "Echec de l'exécution : " . $e->getMessage();
            //----
            //$lcn = null;
        }
        //---la fonction renvoi l'objet de connexion $lcn. elle le renvoi au script qui appelle la fonction
        return $lcn;
    }

    //---Fonction de deconnexion a la base de donnée---
    public static function seDeconnecter($lcn)
    {
        $lcn = null;
    }

    //---Empeche la creation de clne (singleton)---
    public function __clone()
    {
        trigger_error('Le clonage est interdit.', E_USER_ERROR);
    }

    //---Fonction selection---
    public function selectionner($acn, $asTable, $asColonnes = "*", $atColonnesValeurs = "")
    {
        $lsContenu = "";
        $lsWhere = "";
        $tValeurs = array();

        if ($atColonnesValeurs != "")
        {
            foreach ($atColonnesValeurs as $colonne => $valeur)
            {
                $tValeurs[] = $valeur;
            }
            $lsWhere = genererWhere($atColonnesValeurs);
        }

        $lsSQL = "SELECT $asColonnes FROM $asTable $lsWhere";

        echo $lsSQL;

        try
        {
            $lrs = $acn->prepare($lsSQL);
            $lrs->execute($tValeurs);
            $lrs->setFetchMode(PDO::FETCH_ASSOC);

            foreach ($lrs as $enr)
            {
                foreach ($enr as $valeur)
                {
                    $lsContenu .= $valeur . "/";
                }
                $lsContenu = substr($lsContenu, 0, -1);
                $lsContenu .= "<br/>";
            }
            $lsContenu = substr($lsContenu, 0, -5);

            $lrs->closeCursor();
        }
        catch (PDOException $e)
        {
            $lsContenu .= "Echec de l'execution : " . $e->getMessage();
        }

        return $lsContenu;
    }

    //---Fonction de generation des where---
    public function genererWhere($atColonnesValeurs)
    {
        $lsWhere = " WHERE ";

        foreach ($atColonnesValeurs as $colonne => $valeur)
        {
            $lsWhere .= $colonne . "=? AND ";
        }

        $lsWhere = substr($lsWhere, 0, -5);

        return $lsWhere;
    }

    /////////////////////////////////////////////
    //Accesseurs/////////////////////////////////
    /////////////////////////////////////////////

    public function getServeur()
    {
        return $this->serveur;
    }

    public function setServeur($serveur)
    {
        $this->serveur = $serveur;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getUt()
    {
        return $this->ut;
    }

    public function setUt($ut)
    {
        $this->ut = $ut;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function getBd()
    {
        return $this->bd;
    }

    public function setBd($bd)
    {
        $this->bd = $bd;
    }

    public function getPilote()
    {
        return $this->pilote;
    }

    public function setPilote($pilote)
    {
        $this->pilote = $pilote;
    }

}

?>
