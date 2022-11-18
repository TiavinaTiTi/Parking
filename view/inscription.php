<?php
/**
 * Formulaire de reservation
 */
?>
<?php require_once("../controller/Session.php")?>
<?php require_once("header.php")?>
<?php require_once("navbar.php")?>
<?php require_once("sidebar.php")?>
<?php require_once("Formulaire.php")?>

<div class="col-md-offset-2 col-md-10">
    <div class="card col-md-12">
        <div class="card-header">
            <h2>Inscription</h2>
        </div>
        <form action="../controller/Inscription.php" method="post">
            <div class="card-content col-md-12">
                <div class="inscription-client col-md-6">
                    <?php
                        $form = new Formulaire();
                        
                        echo $form->label("Date d'inscription");
                        echo $form->zoneDate("Date de debut:","dateInscription","",date('Y-m-d'));
                        echo $form->label("Nom et prenom");
                        echo $form->zoneSaisie("nomClient","","Veuillez saisir le nom complet du client");
                        echo $form->label("Numero telephone");
                        echo $form->zoneSaisie("telClient","","Veuillez saisir le nom complet du client");
                        echo $form->label("Adresse");
                        echo $form->zoneSaisie("adresse","","Veuillez saisir l'adresse du client");
                    ?>
                    
                </div>
                <div class="inscription-client col-md-6">
                    <?php
                        $form = new Formulaire();
                        echo $form->label("Matricule du vehicule");
                        echo $form->zoneSaisie("matricule","","Veuillez saisir le matricule");
                        echo $form->label("Marque du vehicule");
                        echo $form->zoneSaisie("marqueVehicule","","Veuillez saisir la marque du vehicule");
                        echo $form->label("Reference du vehicule");
                        echo $form->zoneSaisie("referenceVehicule","","Veuillez saisir la reference");
                    ?>
                </div>
                <div class="col-md-12">
                    <?= $form->btn("Enregistrer", "btn-primary col-md-offset-3 col-md-6","btn")?>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once("footer.php")?>
