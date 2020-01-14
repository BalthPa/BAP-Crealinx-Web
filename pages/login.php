<?php include('../inc/header.inc.php') ?>

<form method='post' >
    <label>Nom d'utilisateur</label>
    <input type='text' name='username' placeholder="Nom d'utilisateur">

    <label>Mot de passe</label>
    <input type='password' name='password' placeholder='Mot de passe'>

    <input type='submit' value='Se connecter'>
</form>

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

        echo 'Bienvenue ' . $_SESSION['username'];

    } else if ($passwordBdd !== $passwordTest) {
        echo 'Mot de passe invalide';
    }

?>

<?php include('../inc/footer.inc.php') ?>