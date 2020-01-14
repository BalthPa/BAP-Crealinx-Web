<?php include('../inc/header.inc.php') ?>

<?php

$passwordForm = $_POST['password'];
$usernameForm = $_POST['username'];
$passwordTest = md5($passwordForm);

//echo $passwordForm . $usernameForm ;

include('../inc/connection.inc.php');
$req=$bdd->query("SELECT * FROM accounts WHERE username = '".$usernameForm."'");
//$req->execute(array('name' => $usernameForm));
$data = $req->fetch();
    $passwordBdd = $data['password'];
    $usernameBdd = $data['username'];
    $idBdd = $data['id'];
    //echo $passwordBdd . '<br>';

 if($passwordBdd === $passwordTest){
        session_start();

        $_SESSION['username'] = $usernameBdd;
        $_SESSION['id'] = $idBdd;
        //$_SESSION['mail'] = $data['mail'];
        //$_SESSION['id'] = $data['id'];

        echo '<h1>Bienvenue ' . $_SESSION['username'] . '</h1>';



    } else if ($passwordBdd !== $passwordTest) {
        echo '<h1>Mot de passe invalide<h1>';
    }

?>


<?php include('../inc/footer.inc.php') ?>