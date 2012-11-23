<?php

require_once('CPizza.php');
require_once('CProduit.php');
require_once('CBdd.php');

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
	
	$listePizza = $bdd->select('Pizzas p INNER JOIN Bases b ON p.id_base = b.id_base', 'p.libelle_pizza, b.libelle_base, p.ingredients', 'b.libelle_base LIKE "' . $this->base . '"');
	
	return $listePizza;
    }

}

?>