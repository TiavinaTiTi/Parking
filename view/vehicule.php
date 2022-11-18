<?php 
/**
 * Liste vehicule
 */
?>
<?php require_once("../controller/Session.php")?>
<?php
require_once("header.php");
require_once("navbar.php");
require_once("sidebar.php");
require_once("Formulaire.php");

?>
<div class="col-md-offset-2 col-md-10">
    <div class="card col-md-12">
        <div class="card-header">
            <h2>Clients</h2>
        </div>
        <div class="card-content">
            <div class="thumbnail col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#listVehicule" data-toggle="tab">Listes des vehicules</a></li>
                    <li><a href="#ajoutprivilege" data-toggle="tab">Ajout privilege</a></li>
                    <li><a href="#listprivilege" data-toggle="tab">List privilege</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="listVehicule">
                        <?php require_once("../controller/affichageVehicule.php")?>
                    </div>
                    <div class="tab-pane" id="ajoutprivilege">
                        <div class="col-md-offset-2 col-md-6">
                            <form action="../controller/AjoutPrivilege.php" method="post">
                                <?php $form = new Formulaire();
                                    echo $form->label("Nom");
                                    echo $form->zoneSaisie("nomPr","","Saisir le nom");
                                    echo $form->label("Tel");
                                    echo $form->zoneSaisie("telPr","","Saisir le numero tel");
                                    echo $form->label("Matricule");
                                    echo $form->zoneSaisie("matriculePr","","Saisir le matricule");
                                    echo $form->label("Marque vehicule");
                                    echo $form->zoneSaisie("marquePr","","Saisir la marque du vehicule");
                                    echo $form->btn("Enregistrer","col-md-12 btn-primary")
                                ?>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane" id="listprivilege">
                        <?php require_once("../controller/affichageprivilege.php")?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

