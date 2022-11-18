<?php
/**
 * Interaction avec btn modifier du formulaire de reservation 
 */
require_once("Connexion.php");
if(isset($_POST["dateDebut"])&&isset($_POST["dateFin"])&&isset($_POST["nom"])&&isset($_POST["tel"])&&isset($_POST["adresse"])&&isset($_POST["matricule"])&&isset($_POST["marque"])&&isset($_POST["ref"])&&isset($_POST["rmq"]))
{
    $id = $_POST["id"];
    $dateDebut = $_POST["dateDebut"];
    $dateFin = $_POST["dateFin"];
    $nom = $_POST["nom"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $matricule = $_POST["matricule"];
    $marque = $_POST["marque"];
    $ref = $_POST["ref"];
    $rmq = $_POST["rmq"];
    if($id!=""&&$dateDebut!=""&&$dateFin!=""&&$nom!=""&&$tel!=""&&$adresse!=""&&$matricule!=""&&$marque!="")
    {
        $update = new Connexion();
        $ps = $update->insert("UPDATE reservation SET dateDebut='$dateDebut',dateFin='$dateFin',nomClients='$nom',telClients='$tel',adresse='$adresse',matriculeVehicule='$matricule',marqueVehicule='$marque',referenceVehicule='$ref',rmqClients='$rmq' WHERE idReservation = $id");
        $ps->execute();
        header("location:../view/reservation.php");
    }else{
        header("location:../controller/ModificationReservation.php");
    }
}