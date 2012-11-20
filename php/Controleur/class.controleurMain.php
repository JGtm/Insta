<?php
require_once 'class.controleurAuth.php';

class Controleur_Main
{
    private $controleurSpe;
  
    function __construct($page)
    {
        switch ($page)
        {
            case 'authentification':
                $this->controleurSpe = new Controleur_Formulaire();
                $this->controleurSpe->genererFormulaireAuth();
                
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
