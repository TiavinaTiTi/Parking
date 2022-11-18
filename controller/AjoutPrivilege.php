<?php

if(isset($_POST["nomPr"])&&isset($_POST["telPr"])&&isset($_POST["matriculePr"])&&isset($_POST["marquePr"])){
    $nom = $_POST["nomPr"];
    $tel = $_POST["telPr"];
    $matricule = $_POST["matriculePr"];
    $marque = $_POST["marquePr"];

    if($nom===""&&$tel===""&&$matricule===""&&$marque==="")
    {
        header("location:../view/vehicule.php");
    }else{
        require_once("Connexion.php");
        $con = new Connexion();
        $ps = $con->insert("INSERT INTO privilege(nom,tel,matricule,marque) VALUES (?,?,?,?)");
        $parm = array($nom,$tel,$matricule,$marque);
        $ps->execute($parm);
        header("location:../view/vehicule.php");
    }
}
?>