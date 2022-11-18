<?php
/**
 * Interaction avec btn supprimer du formulaire de reservation 
 */
require_once("Connexion.php");
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    if($id!="")
    {
        $update = new Connexion();
        $ps = $update->insert("DELETE FROM reservation WHERE idReservation = $id LIMIT 1");
        $ps->execute();
        header("location:../view/reservation.php");
    }else{
        header("location:../view/reservation.php");
    }
}