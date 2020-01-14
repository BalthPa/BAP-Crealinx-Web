<?php
try{
    $bdd = new PDO('mysql:host=127.0.0.1; port=8889 ;dbname=bap-crealinx', 'root', 'root');
}

catch(exception $e){
    echo $e->getMessage();
}
?>