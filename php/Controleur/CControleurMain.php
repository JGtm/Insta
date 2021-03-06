<?php

require_once 'php/Modele/CBdd.php';
require_once 'php/Modele/CPizza.php';
require_once 'php/Vue/CHtml.php';
require_once 'php/Modele/CUtilisateur.php';
require_once 'CControleurFormulaire.php';

//function __autoload($classe)
//{
//    require_once $classe . ".php";
//}

class CControleurMain
{

    private $controleurSpe;
    private $bdd;
    private $tabVue = array(
        'nomdeLaPage' => '',
        'tabLiens' => '',
        'titreContenu' => '',
        'contenu' => '',
        'lienImage' => '',
        'titreH2' => '',
        'welcome' => ''
    );

    function __construct($page)
    {
        $result = $this->lesPages($page);
    }

    public function lesPages($page)
    {
        $this->bdd = new CBdd();

        switch ($page)
        {
            default:
                $this->tabVue['nomdeLaPage'] = 'Bienvenue chez Insta-Pizza';
                $this->tabVue['titreContenu'] = 'Essayer nos pizza';
                $this->tabVue['contenu'] = ' ';
                $this->tabVue['lienImage'] = 'images/pizza.jpg';
                $this->tabVue['welcome'] = 'Bienvenue';
                $this->tabVue['titreH2'] = '';
                if (empty($_SESSION['qualite']))
                    $lien = 'authentification';
                else
                    $lien = 'deconnection';

                $this->tabVue['tabLiens'] = array(
                    'home' => '/Insta/index.php',
                    'about' => '',
                    'services' => '',
                    'menu' => '?page=listePizza ',
                    'lala' => '',
                    's\'identifier' => '?page=' . $lien,
                    'contact' => ' ');

                return $this->tabVue;

                break;
            //---Page qui permet a l'utilisateur de se sonnecter
            case 'authentification':
                $this->controleurSpe = new CControleurFormulaire();


                $array = array
                    (
                    'e-Mail :' => "email",
                    'Mot de Passe :' => "mdp",
                );
                $lien = 'validationAuth';
                if (empty($_SESSION['qualite']))
                {
                    $contenu = $this->controleurSpe->genererFormulaire($array, $lien);
                }
                $this->tabVue['nomdeLaPage'] = 'Authentification';
                $this->tabVue['titreContenu'] = 'Authentifier vous';
                $this->tabVue['contenu'] = $contenu;
                $this->tabVue['lienImage'] = '';
                $this->tabVue['welcome'] = '';
                $this->tabVue['titreH2'] = '';
                if (empty($_SESSION['qualite']))
                    $lien = 'authentification';
                else
                    $lien = 'deconnection';

                $this->tabVue['tabLiens'] = array(
                    'home' => '/Insta/index.php',
                    'about' => '',
                    'services' => '',
                    'menu' => '?page=listePizza ',
                    'lala' => '',
                    's\'identifier' => '?page=' . $lien,
                    'contact' => ' ');
                return $this->tabVue;

                break;

            //--Page permettant l'inscription d'un nouvelle utilisateur
            case 'inscription':

                $array = array(
                    'E-Mail :' => 'email',
                    'Mot de passe :' => 'mdp',
                    'Nom :' => 'nom',
                    'Prenom :' => 'prenom',
                    'Adresse:' => 'adresse',
                    'Code postale :' => 'code_postale',
                    'Ville :' => 'ville',
                    'Telephone :' => 'telephone',
                );
                $lien = 'validationInscription';
                $this->controleurSpe = new CControleurFormulaire();

                $contenu = $this->controleurSpe->genererFormulaire($array, $lien);

                $this->tabVue['nomdeLaPage'] = 'Inscription';
                $this->tabVue['titreContenu'] = 'Inscrivez vous';
                $this->tabVue['contenu'] = $contenu;
                $this->tabVue['lienImage'] = '';
                $this->tabVue['welcome'] = '';
                $this->tabVue['titreH2'] = '';
                if (empty($_SESSION['qualite']))
                    $lien = 'authentification';
                else
                    $lien = 'deconnection';

                $this->tabVue['tabLiens'] = array(
                    'home' => '/Insta/index.php',
                    'about' => '',
                    'services' => '',
                    'menu' => '?page=listePizza ',
                    'lala' => '',
                    's\'identifier' => '?page=' . $lien,
                    'contact' => ' ');


                break;

            //---Page de validation de l'insciption
            case 'validationInscription':

                $this->tabVue['nomdeLaPage'] = 'Utilisateur';
                $this->tabVue['titreContenu'] = 'Vos Information';
                $this->tabVue['contenu'] = $contenu;
                $this->tabVue['lienImage'] = '';
                $this->tabVue['welcome'] = '';
                $this->tabVue['titreH2'] = '';
                if (empty($_SESSION['qualite']))
                    $lien = 'authentification';
                else
                    $lien = 'deconnection';

                $this->tabVue['tabLiens'] = array(
                    'home' => '/Insta/index.php',
                    'about' => '',
                    'services' => '',
                    'menu' => '?page=listePizza ',
                    'lala' => '',
                    's\'identifier' => '?page=' . $lien,
                    'contact' => ' ');

                $user = new CClient($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], $_POST['adresse'], $_POST['code_postale'], $_POST['telephone'], $_POST['ville']);
                $user->InsertClient();



                break;


            //---Page de validation de l'authentification    
            case 'validationAuth':


                $tab = array
                    (
                    'mdp' => $_SESSION['mdp'],
                    'email' => $_SESSION['email']
                );

                $acn = $this->bdd->seConnecter();
                $Utilisateur = $this->bdd->selectionner($acn, 'Utilisateurs', '*', $tab);
                //echo $Utilisateur;


                $this->controleurSpe = new CControleurFormulaire();
                $object = $this->controleurSpe->verificationAuth($Utilisateur);

                $this->tabVue['nomdeLaPage'] = 'Utilisateur';
                $this->tabVue['titreContenu'] = 'Vos Information';
                $this->tabVue['contenu'] = $contenu;
                $this->tabVue['lienImage'] = '';
                $this->tabVue['welcome'] = '';
                $this->tabVue['titreH2'] = '';
                if (empty($_SESSION['qualite']))
                    $lien = 'authentification';
                else
                    $lien = 'deconnection';

                $this->tabVue['tabLiens'] = array(
                    'home' => '/Insta/index.php',
                    'about' => '',
                    'services' => '',
                    'menu' => '?page=listePizza ',
                    'lala' => '',
                    's\'identifier' => '?page=' . $lien,
                    'contact' => ' ');

                return $this->tabVue;

                break;
            case 'deconnection':
                session_destroy();
                header('Location:index.php');
                break;



            //---Page presentant les differentes pizzas  
            case 'listePizza':
                // Test
                $base = 'creme fraiche';
                $listePizza = new CPizza($base);
                $lp = $listePizza->listePizza();
                $contenu = $lp;

                break;
        }
    }

    public function getControleurSpe()
    {
        return $this->controleurSpe;
    }

    public function setControleurSpe($controleurSpe)
    {
        $this->controleurSpe = $controleurSpe;
    }

    public function getTabVue()
    {
        return $this->tabVue;
    }

    public function setTabVue($tabVue)
    {
        $this->tabVue = $tabVue;
    }

}

?>
