<?php
/**
 * Integration du formulaire d'inscription
 */
require_once("Connexion.php");
    var_dump($_POST["matricule"]);
    if(isset($_POST["dateInscription"]) && isset($_POST["nomClient"]) && isset($_POST["telClient"]) && isset($_POST["matricule"]) && isset($_POST["marqueVehicule"]) && isset($_POST["adresse"]))
    {
        $dateInscription = $_POST["dateInscription"];
        $nom = $_POST["nomClient"];
        $tel = $_POST["telClient"];
        $matricule = $_POST["matricule"];
        $marque = $_POST["marqueVehicule"];
        $ref = $_POST["referenceVehicule"];
        $adresse = $_POST["adresse"];
        if($dateInscription===""&& $nom===""&& $tel===""&& $matricule===""&& $marque==="")
        {
            header("location:../view/inscription.php");
        }else{
            $con = new Connexion();
            $dateFin = $con->dateFin($dateInscription);
            var_dump($dateFin);
            $ps = $con->insert("INSERT INTO reservation(dateDebut,dateFin,nomClients,telClients,adresse,matriculeVehicule,marqueVehicule,referenceVehicule) VALUES (?,?,?,?,?,?,?,?)");
            $parm = array($dateInscription,$dateFin,$nom,$tel,$adresse,$matricule,$marque,$ref);
            $ps->execute($parm);
            header("location:../view/reservation.php");
        }
    }else{
        // echo "Non insert";
        header("location:../view/inscription.php");
    }
?>