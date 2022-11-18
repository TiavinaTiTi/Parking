<?php 
/**
 * Liste reservation avec interaction
 */
?>


<table class="table table-bordered table-codensed table-hover table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Date debut</th>
            <th>Date fin</th>
            <th>Nom</th>
            <th>Tel</th>
            <th>Matricule</th>
            <th>Marque</th>
            <th>Ref</th>
        </tr>
    </thead>
    <tbody>
            <?php 
            require_once("../controller/Connexion.php");
            $select = new Connexion();
            $affichage = $select->query('SELECT * FROM reservation');
            ?>
        <?php foreach($affichage as $valeur){ ?>
        <tr>
            <?php for($i=0;$i<5;$i++){ ?>
                <td> <?= $valeur[$i] ?></td>
            <?php }?>
            <?php for($i=6;$i<9;$i++){ ?>
                <td> <?= $valeur[$i] ?></td>
            <?php }?>
            
            <td><a  class="btn btn-info" onclick="return confirm('voulez-vous modifier les informations ?')" id="modif" href="ModificationReservation.php?id=<?= $valeur[0] ?>&dateDebut=<?= $valeur[1] ?>&dateFin=<?= $valeur[2] ?>&nom=<?= $valeur[3] ?>&tel=<?= $valeur[4] ?>&adresse=<?= $valeur[5] ?>&matricule=<?= $valeur[6] ?>&marque=<?= $valeur[7] ?>&ref=<?= $valeur[8] ?>&rmq=<?= $valeur[9] ?>"><span class="glyphicon glyphicon-pencil"></span></a> </td>
            <td> <a class="btn btn-danger" onclick="return confirm('Etes-vous sur de votre action ?')" id="supr" href="../controller/SupprimerReservation.php?id=<?= $valeur[0] ?>"><span class="glyphicon glyphicon-trash"></span></a> </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
