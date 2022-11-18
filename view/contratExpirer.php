<?php
/**
 * Liste des contrats expires
 */?>
<?php require_once("../controller/Session.php")?>
<?php
require_once("header.php");
require_once("navbar.php");
require_once("sidebar.php");
?>
<div class="col-md-offset-2 col-md-10">
    <div class="card col-md-12">
        <div class="card-header">
            <h2>Contrat Expirer</h2>
        </div>
        <div class="card-content">
            <?php require_once("../controller/affichageContratExpirer.php")?>
        </div>
    </div>
</div>
<?php require_once("footer.php");?>