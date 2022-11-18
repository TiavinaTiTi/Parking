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
            <th>Rmq</th>
            <th>Ren.</th>
        </tr>
    </thead>
     <tbody>
            <?php 
            require_once("../controller/Connexion.php");
            $date = new Connexion();
            $jourJ = date('Y-m-d');
            $ps = $date->insert("SELECT * FROM reservation");
            $ps->execute();
            $data = $ps->fetchAll();
            foreach($data as $valeur){
                // var_dump($valeur["dateFin"]);
                $dateFin = $valeur["dateFin"];
                if($jourJ>$dateFin){?>
                    <tr>
                        <?php for($i=0;$i<9;$i++){?>
                            <td> <?= $valeur[$i] ?></td>
                        <?php } ?>
                        <td><a onclick="return confirm('Voulez-vous renouveller le contrat du clients ?')" href="reservation.php?matricule=<?= $valeur[5] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-transfer"></span></a></td>
                    </tr>
                <?php } ?>
            <?php } ?>
            
    </tbody>
</table>