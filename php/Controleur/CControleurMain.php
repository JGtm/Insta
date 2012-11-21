<?php

require_once 'CControleurFormulaire.php';
require_once 'php/Modele/CBdd.php';

class CControleurMain
{

    private $controleurSpe;
    private $bdd;

    function __construct($page)
    {
        $this->bdd = CBdd::getInstance();

        switch ($page)
        {
            case 'authentification':
                $this->controleurSpe = new CControleurFormulaire();


                $array = array
                (
                    'e-Mail :' => "email",
                    'Mot de Passe :' => "mdp",
                );
                echo $this->controleurSpe->genererFormulaire($array);
                
                
            case 'validation':
                echo $_SESSION['email'];
                echo $_SESSION['mdp'];
                
                
  
                $acn=$this->bdd->seConnecter();
                $Utilisateur=$this->bdd->selectionner($acn,'Utilisateurs','*',$_SESSION['mdp']);
                $this->controleurSpe->verificationAuth($Utilisateur);
                

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
