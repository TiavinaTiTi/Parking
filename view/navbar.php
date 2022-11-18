<?php 
/**
 * Navigation Bar
 * */ 
?>
<?php require_once("../controller/Session.php")?>

    <div class="navbar navbar-default navbar-fixed-top col-md-offset-2 col-md-10">
        <div class="navbar-header col-md-3">
            <a href="" class="navbar-brand">Projet-Parking</a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#reduire">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="reduire">
        <ul class="nav navbar-nav col-md-5">
                <li class=""><a href="inscription.php">Inscription</a></li>
                <li class=""><a href="reservation.php">Reservation</a></li>
                <li class=""><a href="clients.php">Clients</a></li>
                <li class=""><a href="vehicule.php">Vehicule</a></li>
            </ul>
            <ul class="nav navbar-nav col-md-4">
                <li>
                    <a href="contratExpirer.php">
                        <span class="glyphicon glyphicon-bell"></span>
                        <span class="badge"><?php require_once("../controller/Notif.php") ?></span>
                    </a>
                </li>
                <li><a href="../view/recherche.php"><span class="glyphicon glyphicon-search"></span></a></li>
                <li><a href="../controller/Deconnexion.php"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
            </ul>
        </div>
    </div>