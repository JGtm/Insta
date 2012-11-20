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
    
    public function validFormulaireAuth()
    {
      
    }
    
    
    public function genererFormulaireAuth()
    {
         $formulaireAuth='';
         $formulaireAuth.= '<form method="POST" action="#">';  
         $formulaireAuth.= '<label>e-Mail : </label>';
         $formulaireAuth.= '<input type="text" name="email" value="" />';
         $formulaireAuth.= '<br />';
         $formulaireAuth.= '<label>Mot de passe : </label>';
         $formulaireAuth.= '<input type="password" name="mdp" value="" />';
         $formulaireAuth.= '<br />';
         $formulaireAuth.= '<input type="submit" name="valider" value="Valider" />';
         $formulaireAuth.= '</form>';
         
         echo $formulaireAuth;
    }

    
}
?>
