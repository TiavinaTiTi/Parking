<?php
/**
 * Affichage Liste des vehicule
 */
?>
<table class="table table-bordered table-codensed table-hover table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Marque</th>
            <th>Matricule</th>
            <th>Reference</th>
        </tr>
    </thead>
     <tbody>
            <?php 
            require_once("Connexion.php");
            $select = new Connexion();
            $affichage = $select->query('SELECT DISTINCT idReservation,marqueVehicule,matriculeVehicule,referenceVehicule FROM reservation');
            ?>
        <?php foreach($affichage as $valeur){ ?>
        <tr>
            <?php for($i=0;$i<4;$i++){?>
            <td> <?= $valeur[$i] ?></td>
            <?php }?>
        </tr>
        <?php }?>
    </tbody>
</table>