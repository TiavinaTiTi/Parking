<?php
/**
 * Interaction avec la formulaire de login
 */
require_once("Connexion.php");
if(isset($_POST["utilisateur"]) && isset($_POST["mdp"]))
{
    $utilisateur = $_POST["utilisateur"];
    $mdp = $_POST["mdp"];
    if($utilisateur!="" && $mdp!="")
    {
        $con = new Connexion();
        $req = $con->insert("SELECT utilisateur, mdp FROM login WHERE utilisateur='". $utilisateur ."' AND mdp='". $mdp ."' ");
        $req->execute();
        $ligne = $req->fetch(PDO::FETCH_NUM);
        if($ligne){
            session_start();
            $_SESSION['PROFILE'] = $ligne;
            header("location:../view/inscription.php");
        }else{
            header("location:../view/index.php");        
        }
    }else{
        header("location:../view/index.php");
    }
}else{
    header("location:../view/index.php");   
}
?>