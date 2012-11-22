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
		if (!empty($_SESSION['qualite']))
		{
		    echo $this->controleurSpe->genererFormulaire($array);
		}
		
		break;


	    case 'validation':

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
