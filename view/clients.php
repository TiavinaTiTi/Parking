<?php 
/**
 * Liste Clients
 * Formulaire d'inscription
 */
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
                    <li class="active"><a href="#listClients" data-toggle="tab">Listes des clients</a></li>
                    <li><a href="#alertClients" data-toggle="tab">Remarque client</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="listClients">
                        <?php require_once("../controller/affichageClients.php")?>
                    </div>
                    <div class="tab-pane" id="alertClients">
                    <form action="../controller/AjoutRmq.php" method="post" class="col-md-6">
                        <?php require_once("../controller/ComboRmqClients.php")?>
                        <?php 
                            $form = new Formulaire();
                            echo $form->zoneTextarea("Remarque sur le Clients(Sans utiliser des signes)","rmq");
                            echo $form->btn("Confirmer","btn-primary");
                        ?>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

