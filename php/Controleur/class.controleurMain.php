<?php
require_once 'class.controleurAuth.php';
require_once 'php/Modele/class.bdd.php' ;

class Controleur_Main
{
 
    private $controleurSpe;
    private $bdd;
  
    function __construct($page)
    {
        $bdd=  Modele_bdd::getInstance();
        
        switch ($page)
        {
            case 'authentification':
                $this->controleurSpe = new Controleur_Formulaire();
                echo $this->controleurSpe->genererFormulaireAuth();
        
        $array = array
        (
            'e-Mail :' => "email",
            'Mot de Passe :' => "mdp",
        );
         echo $this->controleurSpe->genererFormulaire($array);
        
                
                $acn=$bdd->seConnecter();
                
                $leMotdePasse=$bdd->selectionner($acn, 'Utilisateurs', 'mdp', $_SESSION['mdp']);
                if ($leMotdePasse!=null)
                {
                    echo $leMotdePasse;
                    $this->controleurSpe->validFormulaireAuth($leMotdePasse);
                }
                
                
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
