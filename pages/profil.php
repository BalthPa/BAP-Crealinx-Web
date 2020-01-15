
<?php

include('../inc/header.inc.php');

if(!empty($_SESSION['username']) == FALSE){
    include('../inc/profilDeconnecte.inc.php');
}
else {
    //echo 'Bienvenue' . $_SESSION['username'];
    include('../inc/profilConnecte.inc.php');
}

include('../inc/footer.inc.php');
?>