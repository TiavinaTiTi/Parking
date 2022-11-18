<?php
/**
 * Combo de selection du clients sur les rmq avec interaction
 */
require_once("Connexion.php");

$con = new Connexion();
$combo = $con->query("SELECT nomClients FROM reservation");
?>

<div class="form-group">
        <label for="">Nom de client:</label>
        <select name="comboCl" id="" class="form-control">
            <?php foreach($combo as $value){?>
                <option value="<?= $value[0] ?>"><?= $value[0] ?></option>
            <?php } ?>
        </select>
</div>