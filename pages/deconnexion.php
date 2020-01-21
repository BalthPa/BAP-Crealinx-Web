<?php include ('../inc/header.inc.php'); 
    session_destroy();
    // Suppression des données de la session
?>

<h1 class='text-center text-danger col-sm-9'>Vous vous êtes déconnecté</h1>




<?php 
include('../inc/profilDeconnecte.inc.php');
include('../inc/footer.inc.php'); 
?>