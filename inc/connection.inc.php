<?php

try{
    $bdd = new PDO('mysql:host=127.0.0.1; dbname=bap-crealinx', 'root', '');
}

catch(exception $e){
    echo $e->getMessage();
}

?>