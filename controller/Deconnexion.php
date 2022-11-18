<?php
/**
 * Interaction sur la deconnexion du session
 */
session_start();
session_destroy();
header('location:../view/index.php')
?>