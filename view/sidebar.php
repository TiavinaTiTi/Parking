<?php
/**
 * Siderbar nav bar en haut
 */
?>
<?php require_once("../controller/Session.php")?>
<nav id="sidebar" class="col-md-2 bordure navbar-fixed-top">
    <div class="sidebar-header">
        <center>
            <img src="assets/image/undraw_male_avatar_323b.svg" alt="profil" srcset="" class="img-profil">
        </center>
        <h4><?php if(isset($_SESSION['PROFILE'])){echo $_SESSION['PROFILE'][0];}else{echo "Utilisateur";} ?></h4>
        <p>Panneau de controle</p>
    </div>
    <div class="side-content">
        <ul class="btn controle col-md-12">
            <li>
                <a href="#" class="" data-toggle='collapse' data-target='#reservation'>
                    <span class="glyphicon glyphicon-folder-open"></span> 
                    Controle Reservation
                </a>
            </li>
            <div class="collapse cacher" id="reservation">
                <li>
                    <a href="reservation.php" class="btn col-md-12 btn-drowpdown">List reservation</a>
                </li>
                <li>
                    <a href="reservation.php" class="btn col-md-12 btn-drowpdown">Ajout reservation</a>
                </li>
            </div>
        </ul>
        <ul class="btn col-md-12">
            <li>
                <a href="#" class="" data-toggle='collapse' data-target='#client'>
                    <span class="glyphicon glyphicon-folder-open"></span> 
                    Controle client
                </a>
            </li>
            <div class="collapse cacher" id="client">
                <li>
                    <a href="clients.php" class="btn col-md-12 btn-drowpdown">List client</a>
                </li>
                <li>
                    <a href="clients.php" class="btn col-md-12 btn-drowpdown">Remarque client</a>
                </li>
            </div>
        </ul>
        <ul class="btn col-md-12">
            <li>
                <a href="#" class="" data-toggle='collapse' data-target='#vehicule'>
                    <span class="glyphicon glyphicon-folder-open"></span> 
                    Controle vehicule
                </a>
            </li>
            <div class="collapse cacher" id="vehicule">
                <li>
                    <a href="vehicule.php" class="btn col-md-12 btn-drowpdown">List vehicule</a>
                </li>
            </div>
        </ul>
        <ul class="btn col-md-12">
            <li>
                <a href="contratExpirer.php">
                    <span class="glyphicon glyphicon-bell"></span> 
                    Contrat expirer
                </a>
            </li>
        </ul>
    </div>
</nav>