<?php
namespace controllers;

use controllers\base\WebController;
use models\ProduitsModele;
use utils\Template;

class ProduitController extends WebController
{
    private $produitModele;

    function __construct()
    {
        $this->produitModele = new ProduitsModele();
    }

    function listeProduit($page = 0): string
    {
        $listeproduit = $this->produitModele->toutlesProduits();
        return Template::render(
            "views/liste/commande.php",
            array("page" => $page, "listeproduit" => $listeproduit)
        );
    }
}