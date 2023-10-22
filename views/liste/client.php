<div class="container mt-5">
    <form method="POST" action='/rechercher'>
        <input type="search" name="q" placeholder="Recherche..." />
        <input type="submit" value="Valider" />
    </form>
    <div class="row">
        
        <div class="card">
            <div class="card-body">
                
                <h3>Les Clients</h3>
            </div>
        </div>
        <br>
        <table class="table" >
            <tr>
                <th >id</th>
                <th >Nom Prénom</th>
                <th >Téléphone</th>
                <th >Email</th>
                <th> Fiche</th>
            </tr>
        <?php    
            foreach($clients as $unClient){
                echo '<tr>';
                echo '<td>'.$unClient->getId().'</td>';
                echo '<td>'.$unClient->getNom()." ".$unClient->getPrenom().'</td>';
                echo '<td>'.$unClient->getTelephone().'</td>';
                echo '<td>'.$unClient->getEmail().'</td>';
                echo '<td> <a href=/client/'.$unClient->getId()." class=btn-fiche>voir fiche</a>";
                echo '</tr>';
            }
        ?>        
        </table>
    </div>
    
</div>
<div class="btn-group" style="position: absolute; bottom: 50px; right: 200px;">
    <a href  ="?page=<?php echo $page-1 ?>" class="btn btn-primary">-</a>
    <a href  ="?page=<?php echo $page+1 ?>" class="btn btn-primary">+</a>
</div>