<?php

class CHtml
{

    private $nomDeLaPage;
    private $tabLiens;
    private $titreContenu;
    private $contenu;
    private $lienImage;
    private $titreH2;
    private $welcome;

    function __construct($nomDeLaPage, $tabLiens, $titreContenu, $contenu, $lienImage = '', $titreH2 = '', $welcome = '')
    {
	$this->nomDeLaPage = $nomDeLaPage;
	$this->tabLiens = $tabLiens;
	$this->titreContenu = $titreContenu;
	$this->contenu = $contenu;
	$this->lienImage = $lienImage;
	$this->titreH2 = $titreH2;
	$this->welcome = $welcome;
    }

    public function getNomDeLaPage()
    {
	return $this->nomDeLaPage;
    }

    public function setNomDeLaPage($nomDeLaPage)
    {
	$this->nomDeLaPage = $nomDeLaPage;
    }

    public function getTabLiens()
    {
	return $this->tabLiens;
    }

    public function setTabLiens($tabLiens)
    {
	$this->tabLiens = $tabLiens;
    }

    public function getTitreContenu()
    {
	return $this->titreContenu;
    }

    public function setTitreContenu($titreContenu)
    {
	$this->titreContenu = $titreContenu;
    }

    public function getContenu()
    {
	return $this->contenu;
    }

    public function setContenu($contenu)
    {
	$this->contenu = $contenu;
    }

    public function getLienImage()
    {
	return $this->lienImage;
    }

    public function setLienImage($lienImage)
    {
	$this->lienImage = $lienImage;
    }

    public function getTitreH2()
    {
	return $this->titreH2;
    }

    public function setTitreH2($titreH2)
    {
	$this->titreH2 = $titreH2;
    }

    public function getWelcome()
    {
	return $this->welcome;
    }

    public function setWelcome($welcome)
    {
	$this->welcome = $welcome;
    }

    public function html()
    {
	$html = '<!DOCTYPE html>';
	$html .= '<html>';
	$html .= $this->head($this->nomDeLaPage);
	$html .= $this->header($this->tabLiens);
	$html .= $this->corps($this->titreContenu, $this->contenu, $this->lienImage, $this->titreH2, $this->welcome);
	$html .= $this->ancre();
	$html .= $this->footer($this->tabLiens);
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
