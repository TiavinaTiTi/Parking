<?php
if(isset($_POST["recherche"])){
    $rechercher = $_POST["recherche"];
    if($rechercher===""){
            $dateFin = "";
    }else{
        require_once("Connexion.php");
        $select = new Connexion();
        $ps = $select->insert('SELECT * FROM reservation WHERE matriculevehicule=? LIMIT 1');
        $param = array($rechercher);
        $ps->execute($param);
        $data = $ps->fetchAll();
        foreach($data as $val){
            $id = $val["0"];
            $dateDebut = $val["1"];
            $dateFin = $val["2"];
            $nom = $val["3"];
            $tel = $val["4"];
            $adresse = $val["5"];
            $matricule = $val["6"];
            $marque = $val["7"];
            $reference = $val["8"];
            $remarque = $val["9"];
        };
        // var_dump($dateFin);
    }
}else{
    $dateFin = "";
}

?>