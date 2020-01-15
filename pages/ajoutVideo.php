<?php include('../inc/header.inc.php');

if(!empty($_SESSION['username']) == FALSE){
    include ('../inc/profilDeconnecte.inc.php');
}
else{
    include('../inc/ajoutVConnecte.inc.php');
}


include('../inc.footer.inc.php') ?>