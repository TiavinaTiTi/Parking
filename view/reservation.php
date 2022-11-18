<?php 
/**
 * Liste de reservation 
 * Formulaire de renouvellement
 */
?>
<?php require_once("../controller/Session.php")?>
<?php require_once("header.php")?>
<?php require_once("navbar.php")?>
<?php require_once("sidebar.php")?>
<?php require_once("Formulaire.php")?>
<?php require_once("../model/Alert.php")?>

<?php
  function val(){
    if(isset($_GET["matricule"])){
      $matricule = $_GET["matricule"];
      if($matricule==""){
        return $value = "";
      }else{
        return $value = $matricule;
      }
    }
  }
?>

<div class="col-md-offset-2 col-md-10">
    <div class="card col-md-12">
        <div class="card-header">
            <h2>Reservation</h2>
        </div>
        <!-- Debut contenus -->
        <div class="thumbnail col-md-12">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#listReservation" data-toggle="tab">List reservation</a></li>
            <li><a href="#ajoutReservation" data-toggle="tab">Ajout reservation</a></li>
          </ul>
          <div class="tab-content">
            <!-- Tab Liste reservation -->
            <div class="tab-pane active" id="listReservation">
              <?php require_once("../controller/affichageReservation.php") ?>
            </div> 
            <!-- Tab Ajout reservation -->
            <div class="tab-pane" id="ajoutReservation">
                <h3>Renouvellement</h3>
                <div class="col-md-6">
                    <form action="../controller/Reservation.php" method="post">    
                        <?php
                            $form = new Formulaire();
                            echo $form->label("Matricule");
                            echo $form->zoneSaisie("matriculeReservation","","Saisir le matricule de reference",val());
                            echo $form->zoneDate("Date de debut:","dateReservation","");
                            echo '<br/>';
                            echo $form->btn("Valider","btn-primary col-md-12");
                        ?>
                    </form>
                </div>
            </div> 
          </div>
        </div>
    </div>
</div>
<?php require_once("footer.php")?>