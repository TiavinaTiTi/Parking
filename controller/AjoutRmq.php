<?php
/**
 * Interaction Remarque du client
 */
if(isset($_POST["rmq"])&&isset($_POST["comboCl"])){
    $remarque = $_POST["rmq"];
    $cl = $_POST["comboCl"];

    if($remarque==="")
    {
        header("location:../view/clients.php");
    }else{
        require_once("Connexion.php");
        $rmq = new Connexion();
        // var_dump($cl);
        $ps = $rmq->insert("SELECT nomClients FROM reservation WHERE nomClients=? ");
        $param = array($cl);
        $ps->execute($param);
        $data = $ps->fetch();
        // var_dump($data);

        $req = $rmq->insert("UPDATE reservation SET rmqClients='" . $remarque. "' WHERE nomClients=?");
        // var_dump($req);
        $p = array($data[0]);
        $req->execute($p);
        header("location:../view/clients.php");
    }
}
?>