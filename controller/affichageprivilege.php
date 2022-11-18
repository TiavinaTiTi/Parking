<table class="table table-bordered table-codensed table-hover table-striped">
    <thead>
        <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Tel</th>
            <th>Matricule</th>
            <th>Marque</th>
        </tr>
    </thead>
     <tbody>
            <?php 
            require_once("Connexion.php");
            $select = new Connexion();
            $affichage = $select->query('SELECT DISTINCT id,nom,tel,matricule,marque FROM privilege');
            ?>
        <?php foreach($affichage as $valeur){ ?>
        <tr>
            <?php
            for($i=0;$i<5;$i++){
                $id = $valeur[0];
                $nom = $valeur[1];
            ?>
            <td> <?= $valeur[$i] ?></td>
        <?php 
            }?>
            <td>
                <a onclick="return confirm('Voulez-vous supprimer?')" href="../controller/SupprimerPrivilege.php?id=<?= $id ?>&clients=<?= $nom ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>