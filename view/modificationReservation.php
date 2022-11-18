
<?php 
/**
 * Formulaire de modification reservation
 */?>
<?php require_once("../controller/Session.php")?>
<?php
require_once("header.php");
require_once("navbar.php");
require_once("sidebar.php");
require_once("Formulaire.php");
?>
<div class="col-md-offset-2 col-md-8">
    <div class="card col-md-12">
        <div class="card-header">
            <h2>Modification </h2>
        </div>
        <div class="card-content">
            <form action="../controller/ModificationReservation.php" method="post">
            <?php $form = new Formulaire();?>
            
            <div class="col-md-12">
                <?php echo $form->zoneSaisie("id","","Identifiant N°:",$form->value('id'));?>
            
            </div>
            <div class="col-md-6">
                <?= $form->zoneDate("Date de Debut","dateDebut","",$form->value("dateDebut"));?>
                    
            </div>
            <div class="col-md-6">
                <?= $form->zoneDate("Date de Fin","dateFin","",$form->value("dateFin"))?>
                    
            </div>
            <div class="col-md-12">
                <?php
                        echo $form->zoneSaisie("nom","","Saisir le nom",$form->value("nom"));
                        echo $form->zoneSaisie("tel","","Saisir le numero telephone",$form->value("tel"));
                        echo $form->zoneSaisie("adresse","","Saisir l'adresse",$form->value("adresse"));
                        echo $form->zoneSaisie("matricule","","Saisir le numero matricule",$form->value("matricule"));
                        echo $form->zoneSaisie("marque","","Saisir la marque du vehicule",$form->value("marque"));
                        echo $form->zoneSaisie("ref","","Saisir la reference",$form->value("ref"));
                        echo $form->zoneSaisie("rmq","","Saisir la remarque",$form->value("rmq"));
                        echo $form->btn("Modifier","btn btn-primary col-md-12");
                ?>

            </div>
            </form>
        </div>
    </div>
</div>
<?php require_once("footer.php")?>

