<?php

class CControleurFormulaire
{

//put your code here
/////////////////////////////////////////////
//Constructeur///////////////////////////////
/////////////////////////////////////////////
    function __construct()
    {
        $array = array(
            'e-Mail ' => "email",
            'Mot de Passe ' => "mdp",
        );
    }

/////////////////////////////////////////////
//fonctions//////////////////////////////////
/////////////////////////////////////////////

    public function validFormulaireAuth()
    {
        
    }

//    public function genererFormulaireAuth()
//    {
//
//
//        $formulaireAuth = '';
//        $formulaireAuth.='<form method="POST" action="#">';
//        $formulaireAuth.='<table border = "0">';
//        $formulaireAuth.='<tbody>';
//        $formulaireAuth.='<tr>';
//        $formulaireAuth.='<td><label>email : </label></td>';
//        $formulaireAuth.='<td><input type="text" name="email" value="" /></td>';
//        $formulaireAuth.='</tr>';
//        $formulaireAuth.='<tr>';
//        $formulaireAuth.='<td><label>Mot de passe : </label></td>';
//        $formulaireAuth.='<td><input type="password" name="mdp" value="" /></td>';
//        $formulaireAuth.='</tr>';
//        $formulaireAuth.='<tr>';
//        $formulaireAuth.='<td><td align="right">';
//        $formulaireAuth.='<input type="submit" name="valider" value="Valider"  />';
//        $formulaireAuth.='</td>';
//        $formulaireAuth.='</tr>';
//        $formulaireAuth.='</tbody>';
//        $formulaireAuth.='</table>';
//        $formulaireAuth.='</form>';
//
//        return $formulaireAuth;
//    }

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
        if ($_SESSION['mdp']==$Utilisateur['mdp'])
        {
            $_SESSION['qualite']=$Utilisateur['qualite'];
            echo "Yeah connexion complete ".$Utilisateur['nom'].'  '.$Utilisateur['prenom'];
            
        }
    }

}

?>
