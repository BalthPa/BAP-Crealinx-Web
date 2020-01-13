<?php include ('../inc/header.inc.php') ?>

<?php
$passwordForm = $_POST['password'];
$usernameForm = $_POST['username'];

$passwordTest = md5($passwordForm);

echo $passwordForm . $usernameForm ;

include('../inc/connection.inc.php');
$req=$bdd->query("SELECT * FROM accounts WHERE username = '".$usernameForm."'");
//$req->execute(array('name' => $usernameForm));
while($data = $req->fetch()){
    $passwordBdd = $data['password'];
    $usernameBdd = $data['username'];
    echo $passwordBdd . '<br>';
    
}
 if($passwordBdd === $passwordTest){
        echo 'Mot de passe valide';
        session_start();

        $_SESSION['username'] = $usernameBdd;
        //$_SESSION['mail'] = $data['mail'];
        //$_SESSION['id'] = $data['id'];

        echo $_SESSION['username'];

        echo '<br /><a href="pageTest.php">page 2</a>';

    } else{
        echo 'Mot de passe invalide';
    }


?>

<?php include('../inc/footer.inc.php') ?>