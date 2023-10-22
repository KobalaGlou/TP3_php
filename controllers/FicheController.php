<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class FicheController extends WebController
{
    public function fiche($id="")
    {
        // À compléter avec les bons appels de méthode.
        return Template::render("views/fiche/client", []);
    }
}