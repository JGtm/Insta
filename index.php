<?php

session_start(); // initialisation des variables de session, il ne doit pas y avoir d'affichage avant cette ligne!!

if (isset($_POST['email']) AND $_POST['email'] != '' AND isset($_POST['mdp']) AND $_POST['mdp'] != '') // si les emails et mdp envoyés en POST existent et ne sont pas vides
{
    $_SESSION['email'] = $_POST['email']; // on stocke ces valeurs dans la variable SESSION correspondante
    $_SESSION['mdp'] = $_POST['mdp'];
    $_SESSION['qualite']='';
    
    
}
?>

<?php

require_once 'php/Vue/CHtml.php';
require_once 'php/Controleur/CControleurMain.php';

$page=$_GET['page'];
$controleurSpe = new CControleurMain($page);
$controleurSpe->lesPages($page);

$tabResult=$controleurSpe->getTabVue();

$html = new CHtml($tabResult);
echo $html->html();
//session_destroy();

?>		
