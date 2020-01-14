
<?php

include('../inc/header.inc.php');

if(!empty($_SESSION['username']) == FALSE){
    include('profilDeconnecte.php');
}
else {
    //echo 'Bienvenue' . $_SESSION['username'];
    include('profilConnecte.php');
}

include('../inc/footer.inc.php');
?>