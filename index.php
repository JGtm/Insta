<?php

session_start(); // initialisation des variables de session, il ne doit pas y avoir d'affichage avant cette ligne!!

if (isset($_POST['email']) AND $_POST['email'] != '' AND isset($_POST['mdp']) AND $_POST['mdp'] != '') // si les emails et mdp envoyés en POST existent et ne sont pas vides
{
    $_SESSION['email'] = $_POST['email']; // on stocke ces valeurs dans la variable SESSION correspondante
    $_SESSION['mdp'] = $_POST['mdp'];
//$_SESSION['qualite']=$qualite;
}
?>


<?php

require_once 'php/Controleur/class.controleurMain.php';
require_once 'php/Vue/class.html.php';

$controleurSpe = new Controleur_Main($_GET['page']);


$titreH2 = 'hello guest!';
$welcome = 'Welcome to our pizza parlour with its friendly hospitality! Try our famous fresh made Italian pizzas with only the freshest ingredients.';
$titreContenu = 'The Best From Our Chef';
$lienImage = 'images/pizza.jpg';
$tabLiens =     $liens = array ('/Insta/index.php' => 'home',
	    ' ' => 'about',
	    ' ' => 'services',
	    ' ' => 'menu',
	     '?page=authentification' => 's\identifier',
	    ' ' => 'contact');
$contenu = '<p>At vero eos et accusamus et iusto odio dignis- simos ducimus qui blanditiis praesentvouptatum deleniti atque corrupti quos dolores et quasmo- lestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui...</p>
<p>At vero eos et accusamus et iusto odio dignis- simos ducimus qui blanditiis praesentvouptatum deleniti atque corrupti quos dolores et quasmo- lestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui...</p>
<p>At vero eos et accusamus et iusto odio dignis- simos ducimus qui blanditiis praesentvouptatum deleniti atque corrupti quos dolores et quasmo- lestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui...</p>';

$html = new Vue_html();
echo $html->html($nomDeLaPage, $tabLiens, $titreContenu, $contenu, $lienImage, $titreH2, $welcome);
?>		