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
<?php require_once("../controller/Rechercher.php")?>

<div class="col-md-offset-2 col-md-10">
    <div class="card col-md-12">
        <div class="card-header">
            <h2>Recherche</h2>
        </div>
        <form action="" method="post">
            <div class="card-content col-md-12">
              <div class="col-md-12">
                <div class="col-md-6">
                  <?php $form = new Formulaire();
                    echo $form->zoneSaisie("recherche","","Recherche...")
                  ?>
                </div>
                <div class="col-md-6">
                  <?= $form->btn("Rechercher","btn-primary") ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="row">
                    <h2 class="col">Proprietaire</h2>
                    <div class="col"><b>Identifiant: <?php if(isset($id)){echo $id;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Date de debut: <?php if(isset($dateDebut)){echo $dateDebut;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Date de fin: <?php if(isset($dateFin)){echo $dateFin;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Nom: <?php if(isset($nom)){echo $nom;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Tel: <?php if(isset($tel)){echo $tel;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Adresse: <?php if(isset($adresse)){echo $adresse;}else{ echo "";} ?></b></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <h2 class="col">Vehicule</h2>
                    <div class="col"><b>Matricule: <?php if(isset($matricule)){echo $matricule;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Marque: <?php if(isset($marque)){echo $marque;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Reference: <?php if(isset($reference)){echo $reference;}else{ echo "";} ?></b></div>
                    <div class="col"><b>Remarque: <?php if(isset($remarque)){echo $remarque;}else{ echo "";} ?></b></div>
                  </div>
                </div>
              </div>
            </div>
        </form>
    </div>
</div>
<?php require_once("footer.php")?>
