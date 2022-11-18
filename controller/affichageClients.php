<?php
/**
 * Affichage Liste Clients avec Interaction
 */
?>
<table class="table table-bordered table-codensed table-hover table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Tel</th>
            <th>Adresse</th>
            <th>Rmq</th>
            <th>Supr Rmq</th>
        </tr>
    </thead>
     <tbody>
            <?php 
            require_once("Connexion.php");
            $select = new Connexion();
            $affichage = $select->query('SELECT DISTINCT idReservation,nomClients,telClients,adresse,rmqClients FROM reservation');
            ?>
        <?php foreach($affichage as $valeur){ ?>
        <tr>
            <?php
            for($i=0;$i<5;$i++){
                $id = $valeur[0];
                $clients = $valeur[1];
            ?>
            <td> <?= $valeur[$i] ?></td>
        <?php 
            }?>
            <td>
                <a onclick="return confirm('Voulez-vous supprimer la remarque?')" href="../controller/SupprimerRmq.php?id=<?= $id ?>&clients=<?= $clients ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>