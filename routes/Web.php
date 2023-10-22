<?php

namespace routes;

use controllers\ClientController;
use controllers\ProduitController;
use controllers\SampleWebController;
use routes\base\Route;
use utils\Template;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();

        // Appel la méthode « home » dans le contrôleur $main.
        Route::Add('/', [$main, 'home']);
        Route::Add('/exemple', [$main, 'exemple']);
        Route::Add('/exemple2/{parametre}', [$main, 'exemple']);
        $clientControlleur = new ClientController();
        Route::Add('/', [$clientControlleur, 'liste']);
        Route::Add('/rechercher',[$clientControlleur, 'rechercher'] );
        Route::Add('/client/{id}',[$clientControlleur, 'fiche']);
        $produitController= new ProduitController();
        Route::Add('/ajoutercommande', [$produitController,'listeProduit']);
        //Route::Add();

        // Appel la fonction inline dans le routeur.
        // Utile pour du code très simple, où un tes, l'utilisation d'un contrôleur est préférable.
        Route::Add('/about', function () {
            return Template::render('views/global/about.php');
        });

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        
    }
}

