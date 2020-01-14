<?php

$db_host='mysql:dbname=bap-crealinx;host=localhost';
$user = 'root';
$pw = '';


try {
    $bdd = new PDO($db_host, $user, $pw);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

?>