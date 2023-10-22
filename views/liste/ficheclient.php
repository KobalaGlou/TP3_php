<div class="container mt-5">

    <div class="card">
        <div class="card-body">
            <div class="titre">
                <h1>Données sur l'utilisateur </h1>
            </div>
            </br>
        </div>
        <div class="grid grid-cols-2 gap-5 ml-10 ">
            <div id="nom">
                <h3>Nom :</h3>
                <?php
                echo $clients->getNom();
                ?>
            </div>
            <div id="prénom">
                <h3>Prénom :</h3>
                <?php
                echo $clients->getPrenom();
                ?>
            </div>
            <div id="mail">
                <h3>Email :</h3>
                <?php
                echo $clients->getEmail();
                ?>
            </div>
            <div id="tel">
                <h3>Téléphone :</h3>
                <?php
                echo $clients->getTelephone();
                ?>
            </div>
        </div>
    </div>
    </br>
    </br>

    <div class="card">
        <div class="card-body">
            <div class="titre">
                <h1>Les Produits </h1>
            </div>
            </br>
        </div>
        <div>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>Nom </th>
                    <th>Description</th>
                    <th>Prix</th>
                </tr>
                <?php
                foreach ($clients->lesProduits() as $leProduit) {
                    echo '<tr>';
                    echo '<td>' . $leProduit->getId() . '</td>';
                    echo '<td>' . $leProduit->getNom() . '</td>';
                    echo '<td>' . $leProduit->getDescription() . '</td>';
                    echo '<td>' . $leProduit->getPrix() . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>

        </div>
        <a href="/ajoutercommande" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-fit">Ajouter</a>
    </div>
    </br>
    </br>




</div>