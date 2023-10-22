<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class ClientController extends WebController
{
    private $clientModele;

    function __construct()
    {
        $this->clientModele = new ClientsModele();
    }

    function liste($page = 0): string
    {
        $clients = $this->clientModele->liste(10, $page);
        return Template::render(
            "views/liste/client.php",
            array("page" => $page, "clients" => $clients)
        );
    }

    function rechercher(){
        $keyword=$_POST["q"];
        $clients = $this->clientModele->recherche($keyword);
        return Template::render(
            "views/liste/client.php",
            array( "clients" => $clients)
        );
    }

    public function fiche($id="")
{
    $ficheClient=$this->clientModele->getByClientId($id);


    // Affichage de la vue ($client est un objet de type Client, récupéré en base via votre modèle et son identifiant)
    return Template::render("views/liste/ficheclient.php", array("clients" =>$ficheClient));
}

}