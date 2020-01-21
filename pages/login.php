<?php include('../inc/header.inc.php') ?>

<?php

//On vérifie qu'il n'y a pas de balise dans les champs repmlis

$passwordForm = htmlspecialchars($_POST['password']);
$usernameForm = htmlspecialchars($_POST['username']);

// On hash le mot de passe pour le faire matcher avec celui dans la BDD
$passwordTest = md5($passwordForm);


include('../inc/connection.inc.php');
$req=$bdd->query("SELECT * FROM accounts WHERE username = '".$usernameForm."'");

$data = $req->fetch();
    $passwordBdd = $data['password'];
    $usernameBdd = $data['username'];
    $idBdd = $data['id'];
    //echo $passwordBdd . '<br>';

 if($passwordBdd === $passwordTest){

    //Si les infos sont bonnes, on démarre une session, on enregistre les infos dans cette variable pour pouvoir afficher toutes les fonctionnalités
        session_start();

        $_SESSION['username'] = $usernameBdd;
        $_SESSION['id'] = $idBdd;

        include('../inc/profilConnecte.inc.php');

        
    } else if ($passwordBdd !== $passwordTest) {
        echo '<h1 class="text-center text-danger col-sm-9">Mot de passe invalide</h1>';
        include('../inc/profilDeconnecte.inc.php');
    }

?>


<?php include('../inc/footer.inc.php') ?>