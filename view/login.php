<?php
/**
 * Formulaire de login
 */
?>
    <div class="login col-md-offset-3 col-md-6">
        <div class="col-md-6">
            <div class="login-style">
                <h2>Projet Parking</h2>
                <!-- <p>Creer une compte</p> -->
                <img src="assets/image/undraw_Vehicle_sale_a645.svg" alt="image" class="col-md-12">
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-heading">
                <img src="assets/image/undraw_male_avatar_323b.svg" alt="avatar-login" class="col-md-offset-3 col-md-6">
                <h2>Authentification</h2>
            </div>
            <div class="login-body">
                <form action="../controller/Login.php" method="POST">
                    <?php
                        $form = new Formulaire();
                        echo $form->zoneSaisie("utilisateur", "login-saisie" ,"Veuillez-vous identifier");
                        echo $form->zonePwd("mdp", "login-saisie" ,"Mots de passe");
                        echo $form->btn("Connexion","btn-primary col-md-12")
                    ?>

                </form>
            </div>
        </div>
    </div>
