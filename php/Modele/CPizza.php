<?php

require_once('CPizza.php');
require_once('CProduit.php');
require_once ('CBdd');

class CPizza extends CProduit
{

    public $base = '';
    public $taille = '';

    function __construct($base, $taille = '')
    {
	$this->base = $base;
	$this->taille = $taille;
    }

    public function listePizza()
    {
	$bdd = new CBdd();
	$connexion = $bdd->seConnecter();
	
	$listePizza = $bdd->selectionner($connexion, 'Pizzas p INNER JOIN Bases b ON p.base_id = b.base_id', '*', $this->base);
	
	return $listePizza;
    }

}

?>