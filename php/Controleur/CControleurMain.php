<?php

require_once 'php/Modele/CBdd.php';
require_once 'php/Modele/CPizza.php';
require_once 'php/Vue/CHtml.php';

function __autoload($classe)
{
    require_once $classe . ".php";
}

class CControleurMain
{

    private $controleurSpe;
    private $bdd;

    function __construct($page)
    {
        $result = $this->lesPages($page);
    }

    public function lesPages($page)
    {
        $this->bdd = new CBdd();

	switch ($page)
	{
	    case 'authentification':
		$this->controleurSpe = new CControleurFormulaire();


                $array = array
                    (
                    'e-Mail :' => "email",
                    'Mot de Passe :' => "mdp",
                );
                $lien = 'validationAuth';
                if (empty($_SESSION['qualite']))
                {
                    return $this->controleurSpe->genererFormulaire($array,$lien);
                }

                break;

            case 'inscription':
                
                $array= array (
                    'E-Mail :' =>'email',
                    'Mot de passe :' =>'mdp',
                    'Nom :' =>'nom',
                    'Prenom :' =>'prenom',
                    'Adresse:' =>'adresse',
                    'Code postale :' =>'code_postale',
                    'Ville :' =>'ville',
                    'Telephone :' =>'telephone',
                        );
                $lien = 'validationInscription';
                $this->controleurSpe = new CControleurFormulaire();
                return $this->controleurSpe->genererFormulaire($array,$lien);
                

                break;
              case 'validationInscription':
                
                

                break;
            
            case 'validationAuth':


                $tab = array
                    (
                    'mdp' => $_SESSION['mdp'],
                    'email' => $_SESSION['email']
                );

                $acn = $this->bdd->seConnecter();
                $Utilisateur = $this->bdd->selectionner($acn, 'Utilisateurs', '*', $tab);
                //echo $Utilisateur;


                $this->controleurSpe = new CControleurFormulaire();
                $this->controleurSpe->verificationAuth($Utilisateur);

                break;


            case 'listePizza':
                // Test
                $base = 'creme fraiche';
                $listePizza = new CPizza($base);
                $lp = $listePizza->listePizza();
                return $lp;

                break;
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
