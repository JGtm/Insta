<?php

class CHtml
{

//    private $tab = array (
//        'nomdeLaPage' => '',
//        'tabLiens'=> array (
//            'home' => '/Insta/index.php',
//	    'about' => '',
//	    'services' => '',
//	    'menu' => '?page=listePizza ',
//	    'lala' => '',
//	    's\'identifier' => '?page=authentification',
//	    'contact' => ' '),
//        'titreContenu'=>'',
//        'contenu'=>'',
//        'lienImage'=>'',
//        'titreH2'=>'',
//        'welcome'=>''
//        );
    private $tab;


    function __construct($tab)
    {
        $this->tab=$tab;

    }
    public function getTab()
    {
        return $this->tab;
    }

    public function setTab($tab)
    {
        $this->tab = $tab;
    }

   

    public function html()
    {
	$html = '<!DOCTYPE html>';
	$html .= '<html>';
	$html .= $this->head($this->tab['nomDeLaPage']);
	$html .= $this->header($this->tab['tabLiens']);
	$html .= $this->corps($this->tab['titreContenu'], $this->tab['contenu'], $this->tab['lienImage'], $this->tab['titreH2'], $this->tab['welcome']);
	$html .= $this->ancre();
	$html .= $this->footer($this->tab['tabLiens']);
	$html .= '</html>';

	return $html;
    }

    private function head($title)
    {
	$head = '<head>';
	$head .= '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
	$head .= '<title>' . $title . '</title>';
	$head .= '<link rel="stylesheet" href="css/style.css" type="text/css" />';
	$head .= '</head>';

	return $head;
    }

    private function header($nav)
    {
	$header = '<div class="header">';
	$header .= '<div class="header-top">';
	$header .= '<div class="header-logo"></div>';
	$header .= '<div class="header-contact">';
	$header .= '<span>Des Questions ? </span>';
	$header .= '<span class="phone">Appelez nous : 06 52 80 81 77</span>';
	$header .= '</div>';
	$header .= '<div class="clear "></div>';
	$header .= '<div class="nav">';
	$header .= '<div class="bouton">';
	$header .= $this->nav($nav);
	$header .= '</div>';
	$header .= '<div class = "search"></div>';
	$header .= '</div>';
	$header .= '<div class = "clear"></div>';
	$header .= '</div>';
	$header .= '</div>';

	return $header;
    }

    private function nav($liens)
    {
	$nav .= '<ul>';
	foreach ($liens AS $titreLien => $lien)
	{
	    $nav .= '<li><a href="' . $lien . '">' . $titreLien . '</a></li>';
	}

	$nav .= '</ul>';

	return $nav;
    }

    private function corps($titreContenu, $contenu, $lienImage = '', $titreH2 = '', $welcome = '')
    {
	$corps = '<div class="corps">';

	if (isSet($titreH2) AND $titreH2 != '')
	{
	    $corps .= '<h2 class="title">' . $titreH2 . '</h2>';
	}

	if (isSet($welcome) AND $welcome != '')
	{
	    $corps .= '<div class="welcome">';
	    $corps .= nl2br($welcome);
	    $corps .= '</div>';
	}

	$corps .= '<div class="contenu">';
	$corps .= '<h3 class="title">' . $titreContenu . '</h3>';

	if (isSet($lienImage) AND $lienImage != '')
	{
	    $corps .= '<img src="' . $lienImage . '" />';
	}

	$corps .= '<p>';
	$corps .= $contenu;
	$corps .= '</p>';
	$corps .= '<div class="clear"></div>';
	// Lien "Lire la suite" à gerer je ne sais pas comment
	$corps .= '<div align="right"><a href="" class="more">Lire la suite</a></div>';
	$corps .= '</div>';
	$corps .= '</div>';

	return $corps;
    }

    private function ancre()
    {
	$ancre = '<div class="blocktotop">';
	$ancre .= '<a id="totop" href="#" style="outline: medium none;">Retourner en haut de page</a>';
	$ancre .= '</div>';

	return $ancre;
    }

    private function footer($nav)
    {
	$footer = '<div class="footer">';
	$footer .= '<div class="footer-top">';
	$footer .= '<div class="footer-info">';
	$footer .= '<p>';
	$footer .= '<span class="siteName">Happy Family </span>';
	$footer .= '© 2012 | ';
	$footer .= '<a href="?privacy-policy">Politique de confidentialité</a>';
	$footer .= '</p>';
	$footer .= '</div>';
	$footer .= '<div class="footer-nav">';
	$footer .= $this->nav($nav);
	$footer .= '</div>';
	$footer .= '<div class="clear"></div>';
	$footer .= '</div>';
	$footer .= '</div>';

	return $footer;
    }

}

?>
