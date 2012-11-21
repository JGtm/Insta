<?php

class CHtml
{
    public function html($nomDeLaPage, $tabLiens, $titreContenu, $contenu, $lienImage, $titreH2 = '', $welcome = '')
    {
	$html = '<!DOCTYPE html>';
	$html .= '<html>';
	$html .= $this->head($nomDeLaPage);
	$html .= $this->header($tabLiens);
	$html .= $this->corps($titreContenu, $contenu, $lienImage, $titreH2, $welcome);
	$html .= $this->ancre();
	$html .= $this->footer($tabLiens);
	$html .= '</html>';

	return $html;
    }

    public function head($title)
    {
	$head = '<head>';
	$head .= '<meta http-equiv="content-type" content="text/html; charset=UTF-8" />';
	$head .= '<title>' . $title . '</title>';
	$head .= '<link rel="stylesheet" href="css/style.css" type="text/css" />';
	$head .= '</head>';

	return $head;
    }

    public function header($nav)
    {
	$header = '<div class="header">';
	$header .= '<div class="header-top">';
	$header .= '<div class="header-logo"></div>';
	$header .= '<div class="header-contact">';
	$header .= '<span>Des Questions ? </span>';
	$header .= '<span class="phone">Appelez nous : 06 52 80 81 77</span>';
	$header .= '</div>';
	$header .= '<div class="clear "></div>';
	$header .= $this->header_nav($nav);
	$header .= '<div class = "clear"></div>';
	$header .= '</div>';
	$header .= '</div>';

	return $header;
    }

    public function header_nav($nav)
    {
	$header_nav = '<div class="nav">';
	$header_nav .= '<div class="bouton">';
	$header_nav .= $this->nav($nav);
	$header_nav .= '</div>';
	$header_nav .= '<div class = "search"></div>';
	$header_nav .= '</div>';

	return $header_nav;
    }

    public function nav($liens)
    {
	$nav .= '<ul>';

	foreach ($liens AS $titreLien => $lien)
	{
	    $nav .= '<li><a href="' . $lien . '">' . $titreLien . '</a></li>';
	}

	$nav .= '</ul>';

	return $nav;
    }

    public function corps($titreContenu, $contenu, $lienImage = '', $titreH2 = '', $welcome = '')
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
	$corps .= '<div class="right" align="right"><a href="" class="more">Lire la suite</a></div>';
	$corps .= '</div>';
	$corps .= '</div>';

	return $corps;
    }

    public function ancre()
    {
	$ancre = '<div class="blocktotop">';
	$ancre .= '<a id="totop" href="#" style="outline: medium none;">Retourner en haut de page</a>';
	$ancre .= '</div>';

	return $ancre;
    }

    public function footer($nav)
    {
	$footer = '<div class="footer">';
	$footer .= '<div class="footer-top">';
	$footer .= '<div class="footer-info">';
	$footer .= '<p>';
	$footer .= '<span class="siteName">Happy Family </span>';
	$footer .= '© 2012 | ';
	$footer .= '<a href="http://livedemo00.template-help.com/joomla_41255/index.php/privacy-policy">Politique de confidentialité</a>';
	$footer .= '</p>';
	$footer .= '</div>';
	$footer .= $this->footer_nav($nav);
	$footer .= '<div class="clear"></div>';
	$footer .= '</div>';
	$footer .= '</div>';

	return $footer;
    }

    public function footer_nav($nav)
    {
	$footer_nav = '<div class="footer-nav">';
	$footer_nav .= $this->nav($nav);
	$footer_nav .= '</div>';

	return $footer_nav;
    }

}

?>
