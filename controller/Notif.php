<?php
require_once("Connexion.php");
$jourJ = date('Y-m-d');
$notif = new Connexion();
$ps = $notif->insert("SELECT * FROM reservation");
$ps->execute();
$data = $ps->fetchAll();
$i=0;
foreach($data as $valeur){
    $dateFin = $valeur["dateFin"];
    if($jourJ>$dateFin){
        $i = $i + 1;
    }
}
echo $i;

?>