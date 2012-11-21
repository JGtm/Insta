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

$controleurSpe = new Controleur_Main($_GET['page']);


?>

<html>
    <head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
	<div class="header">
	    <div class="header-top">
		<div class="header-logo"></div>
		<div class="header-contact">
		    <span>Any Question ?</span>
		    <span class="phone"> Call Us: +1 800 559 6580</span>
		</div>
		<div class="clear "></div>
		<div class="nav">
		    <div class="bouton">
			<ul>
			    <li><a href="/Insta/index.php">home</a></li>
			    <li><a>about</a></li>
			    <li><a>services</a></li>
			    <li><a>menu</a></li>
			    <li><a href="?page=authentification">s'identifier</a></li>
			    <li><a>contact</a></li>
			</ul>
		    </div>
		    <div class="search"></div>
		</div>
		<div class="clear"></div>
	    </div>
	</div>
	<div class="corps">
	    <h2 class="title">hello guest!</h2>
	    <div class="welcome">
		Welcome to our pizza parlour with its friendly hospitality!
		<br>
		Try our famous fresh made Italian pizzas with only the freshest ingredients.
	    </div>
	    <div class="contenu">
		<h3 class="title">The Best From  Our Chef</h3>
		<img src="images/pizza.jpg" />
		<p>At vero eos et accusamus et iusto odio dignis- simos ducimus  qui blanditiis praesentvouptatum deleniti atque corrupti quos dolores et  quasmo- lestias excepturi sint occaecati cupiditate non provident,  similique sunt in culpa qui...</p>
		<p>At vero eos et accusamus et iusto odio dignis- simos ducimus  qui blanditiis praesentvouptatum deleniti atque corrupti quos dolores et  quasmo- lestias excepturi sint occaecati cupiditate non provident,  similique sunt in culpa qui...</p>
		<p>At vero eos et accusamus et iusto odio dignis- simos ducimus  qui blanditiis praesentvouptatum deleniti atque corrupti quos dolores et  quasmo- lestias excepturi sint occaecati cupiditate non provident,  similique sunt in culpa qui...</p>
		<div class="clear"></div>
		<div class="right" align="right"><a href="" class="more">More</a></div>
	    </div>
	</div>
	<div class="blocktotop">
	    <a id="totop" href="#" style="outline: medium none;">Scroll to Top</a>
	</div>
	<div class="footer">
	    <div class="footer-top">
		<div class="footer-info">
		    <p>
			<span class="siteName">Happy Family </span>
			© 2012 |
			<a href="http://livedemo00.template-help.com/joomla_41255/index.php/privacy-policy">Privacy Policy</a>
		    </p>
		</div>
		<div class="footer-nav">
		    <ul>
			<li><a href="/Insta/index.php">home</a></li>
			<li><a>about</a></li>
			<li><a>services</a></li>
			<li><a>menu</a></li>
			<li><a href="Vue/authentification.php">s'identifier</a></li>
			<li><a>contact</a></li>
		    </ul>
		</div>
		<div class="clear"></div>
	    </div>
	</div>
    </body>
</html>