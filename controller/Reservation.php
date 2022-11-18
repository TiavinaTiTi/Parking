<?php

/**
 * Interaction avec formulaire de renouvellement
 */
require_once("Connexion.php");
if(isset($_POST["matriculeReservation"])&&isset($_POST["dateReservation"]))
{
    $matricule = $_POST["matriculeReservation"];
    $newDate = $_POST["dateReservation"];
    if($matricule != "" && $newDate != "")
    {
        $bdMatricule = new Connexion();
        // var_dump($matricule);
        $ps = $bdMatricule->insert("SELECT matriculeVehicule FROM reservation WHERE matriculeVehicule='$matricule'");
        $ps->execute();
        $data = $ps->fetch();
        var_dump($data);
        if(isset($data)){
            echo "Donnee correct";
            $prepare_state = $bdMatricule->insert('UPDATE reservation SET DateDebut=?, DateFin=? WHERE matriculeVehicule="' . $data[0] . '"');
            $param = array($newDate,$bdMatricule->dateFin($newDate));
            $prepare_state->execute($param);
            header("location:../view/reservation.php");
        }else{
            echo "Donnee incorrect";
        }
    }else{
        header("location:../view/reservation.php");
    }

}
?>