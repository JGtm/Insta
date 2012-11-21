<?php

class Controleur_Formulaire
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

    public function validFormulaireAuth($leMotdePasse)
    {
      
    }

    public function genererFormulaireAuth()
    {
        $formulaireAuth = '';
        $formulaireAuth.='<form method="POST" action="#">';
        $formulaireAuth.='<table border = "0">';
        $formulaireAuth.='<tbody>';
        $formulaireAuth.='<tr>';
        $formulaireAuth.='<td><label>email : </label></td>';
        $formulaireAuth.='<td><input type="text" name="email" value="" /></td>';
        $formulaireAuth.='</tr>';
        $formulaireAuth.='<tr>';
        $formulaireAuth.='<td><label>Mot de passe : </label></td>';
        $formulaireAuth.='<td><input type="password" name="mdp" value="" /></td>';
        $formulaireAuth.='</tr>';
        $formulaireAuth.='<tr>';
        $formulaireAuth.='<td><td align="right">';
        $formulaireAuth.='<input type="submit" name="valider" value="Valider"  />';
        $formulaireAuth.='</td>';
        $formulaireAuth.='</tr>';
        $formulaireAuth.='</tbody>';
        $formulaireAuth.='</table>';
        $formulaireAuth.='</form>';

        return $formulaireAuth;
    }
}
?>
