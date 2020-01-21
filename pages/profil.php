
<?php

include('../inc/header.inc.php');

if(!empty($_SESSION['username']) == FALSE){
    include('../inc/profilDeconnecte.inc.php');
}
else {
    include('../inc/profilConnecte.inc.php');
}

?>