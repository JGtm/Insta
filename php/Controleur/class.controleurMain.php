<?php
require_once 'class.controleurAuth.php';
require_once 'class.dbb.php';

class Controleur_Main
{
 
    private $controleurSpe;
    private $bdd;
  
    function __construct($page)
    {
        $bdd=new Modele_bdd();
        
        switch ($page)
        {
            case 'authentification':
                $this->controleurSpe = new Controleur_Formulaire();
                echo $this->controleurSpe->genererFormulaireAuth();
                
                $acn=$bdd->seConnecter();
                $bdd->selectionner($acn, 'utilisateur', 'mdp', $_SESSION['mdp']);
                
        }
    }
    public function getControleurSpe()
    {
        return $this->controleurSpe;
    }

    public function setControleurSpe($controleurSpe)
    {
        $this->controleurSpe = $controleurSpe;
    }


    
    

}

?>
