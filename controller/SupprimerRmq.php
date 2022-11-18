<?php
/**
 * Interaction avec la suppression des remarque sur les clients
 */
require_once("Connexion.php");
if(isset($_GET["id"])&&isset($_GET["clients"]))
{
    $id = $_GET["id"];
    $cl = $_GET["clients"];
    $supr = new Connexion();
    $ps = $supr->insert("SELECT idReservation,nomClients,rmqClients FROM reservation WHERE idReservation=? AND nomClients=?");
    $param = array($id,$cl);
    $ps->execute($param);
    $ref = $ps->fetch();

    var_dump($ref);
    if($ref){
        if($ref[0]!="" && $ref[1]!="" && $ref[2]!=""){
            $prepare_state = $supr->insert('UPDATE reservation SET rmqClients="" WHERE idReservation="' . $ref[0] .'" AND nomClients="' . $ref[1] .'" ');
            $prepare_state->execute();
            header("location:../view/clients.php");
        }else{
            header("location:../view/clients.php");
        }
    }

}
?>