<?php

class CControleurFormulaire
{

//put your code here
/////////////////////////////////////////////
//Constructeur///////////////////////////////
/////////////////////////////////////////////
    function __construct()
    {
	
    }

/////////////////////////////////////////////
//fonctions//////////////////////////////////
/////////////////////////////////////////////



    public function genererFormulaire($array,$lien)
    {
	$formulaire = '';
	$formulaire.='<form method="POST" action="?page='.$lien.'">';
	$formulaire.='<table border = "0">';
	$formulaire.='<tbody>';

	foreach ($array as $key => $value)
	{
	    $formulaire.='<tr>';
	    $formulaire.='<td><label>';
	    $formulaire.= $key;
	    $formulaire.='</label></td>';
            if ($value=='mdp')
                {
                $formulaire.='<td><input type="password" name=';
                }
                else
                {
	    $formulaire.='<td><input type="text" name=';
                }
	    $formulaire.= $value;
	    $formulaire.=' value="" /></td>';
	    $formulaire.='</tr>';
	}
	$formulaire.='<tr>';
	$formulaire.='<td>';
        if ($lien!='validationInscription')
        {
        $formulaire.='<a href="?page=inscription" >pas encore inscrit ?</a>';
        }
        $formulaire.='</td>';
        $formulaire.='<td align="right">';
	$formulaire.='<input type="submit" name="valider" value="Valider"/>';
	$formulaire.='</td>';
	$formulaire.='</tr>';
	$formulaire.='</tbody>';
	$formulaire.='</table>';
	$formulaire.='</form>';
        //$formulaire.='<label id="msg"><?php echo'. $lsMessage.'</label>';

	return $formulaire;
    }

    public function verificationAuth($Utilisateur)
    {
        echo $Utilisateur;
	$tab = explode('/', $Utilisateur);
	if (!empty($_SESSION['mdp']) AND $_SESSION['mdp'] == $tab[2])
	{
	    $_SESSION['qualite'] = $tab[10];
	    switch ($_SESSION['qualite'])
	    {

                //---Dans le cas ou l'utilisateur est un ADMIN 
                case 'SBO':
                    $admin = CAdministrateur::getInstance();
                    echo "sbo";
                    break;

		//---Dans le cas ou l'utilisateur est un EMPLOYER        
		case 'BO':
		    $employe = new CEmploye();
                    echo 'bo';
                    break;
		//---Dans le cas ou l'utilisateur est un CLIENT
		case 'FO':
		    $client=new CClient();
                    echo "fo";
                    break;

		//---Autre cas
		default:
                    echo "erreur";
		    
                    break;
	    }
	}
    }

    public function pageAdmin($admin)
    {
        $nomDeLaPage='admin';
        $tabLiens=
        $pageAdmin =new CHtml($nomDeLaPage, $tabLiens, $titreContenu, $contenu, $lienImage, $titreH2, $welcome);
    }

}


?>
