<?php include('../inc/header.inc.php') ?>

<?php

$passwordForm = htmlspecialchars($_POST['password']);
$usernameForm = htmlspecialchars($_POST['username']);
$passwordTest = md5($passwordForm);

//echo $passwordForm . $usernameForm ;

include('../inc/connection.inc.php');
$req=$bdd->query("SELECT * FROM accounts WHERE username = '".$usernameForm."'");

$data = $req->fetch();
    $passwordBdd = $data['password'];
    $usernameBdd = $data['username'];
    $idBdd = $data['id'];

    $newUser = 'username_' . $idBdd;

 if($passwordBdd === $passwordTest){
        session_start();

        $_SESSION['username'] = $usernameBdd;
        $_SESSION['id'] = $idBdd;
        

        // On rajoute une colonne dans la table a regarder plus tards
        $add = $bdd->query("ALTER TABLE watchlater ADD $newUser INT(11)");

        include('../inc/profilConnecte.inc.php');



        
    } else if ($passwordBdd !== $passwordTest) {
        echo '<h1 class="text-center text-danger col-sm-9">Mot de passe invalide</h1>';
        include('../inc/profilDeconnecte.inc.php');
    }

?>

