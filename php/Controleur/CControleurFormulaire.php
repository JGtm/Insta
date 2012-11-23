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

    public function genererFormulaire($array)
    {
        $formulaire = '';
        $formulaire.='<form method="POST" action="?page=validation">';
        $formulaire.='<table border = "0">';
        $formulaire.='<tbody>';

        foreach ($array as $key => $value)
        {
            $formulaire.='<tr>';
            $formulaire.='<td><label>';
            $formulaire.= $key;
            $formulaire.='</label></td>';
            $formulaire.='<td><input type="text" name=';
            $formulaire.= $value;
            $formulaire.=' value="" /></td>';
            $formulaire.='</tr>';
        }
        $formulaire.='<tr>';
        $formulaire.='<td><td align="right">';
        $formulaire.='<input type="submit" name="valider" value="Valider"  />';
        $formulaire.='</td>';
        $formulaire.='</tr>';
        $formulaire.='</tbody>';
        $formulaire.='</table>';
        $formulaire.='</form>';
        return $formulaire;
    }

    public function verificationAuth($Utilisateur)
    {
        $tab = explode('/', $Utilisateur);
        if (!empty($_SESSION['mdp']) AND $_SESSION['mdp'] == $tab[2])
        {
            $_SESSION['qualite'] = $tab[10];
            switch ($_SESSION['qualite'])
            {

                //---Dans le cas ou l'utilisateur est un ADMIN 
                case 'SBO':
                    $admin = CAdministrateur::getInstance();
                    

                //---Dans le cas ou l'utilisateur est un EMPLOYER        
                case 'BO':
                    echo "bo";
                //---Dans le cas ou l'utilisateur est un CLIENT
                case 'FO':
                    echo "fo";

                //---Autre cas
                default:
                    echo "erreur";
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
