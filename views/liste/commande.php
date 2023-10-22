<div class="container mt-5">

    <div class="card">
        <h1>Ajouter une Commande</h1>
    </div>
    <select class="block appearance-none w-fit bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="produit">
                <?php
                foreach ($listeproduit as $lePorduit) {
                    echo '<option value="' . $lePorduit->getId() . '">' . $lePorduit->getNom() . ' ' . $lePorduit->getPrix() . '€</option>';
                }
                ?>
            </select>
</div>