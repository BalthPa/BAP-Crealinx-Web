<?php

$db_host='mysql:dbname=bap-crealinx;host=localhost';
$user = 'root';
$pw = '';


try {
    $conn = new PDO($db_host, $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

?>