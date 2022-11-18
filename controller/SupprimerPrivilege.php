<?php
require_once("Connexion.php");
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    if($id!="")
    {
        $update = new Connexion();
        $ps = $update->insert("DELETE FROM privilege WHERE id = $id LIMIT 1");
        $ps->execute();
        header("location:../view/vehicule.php");
    }else{
        header("location:../view/vehicule.php");
    }
}

?>