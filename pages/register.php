<?php include('../inc/header.inc.php') ?>
<?php
include('../inc/connection.inc.php');

//$password = password_hash('$_POST["password"]', PASSWORD_DEFAULT);

$password = md5($_POST['password']);

$req= $bdd->prepare('INSERT INTO accounts (username,password,mail,role) VALUES (:username, :password, :mail, :role)');
$req->execute(array(
    'username' => $_POST['username'],
    'password' => $password,
    'mail' => $_POST['mail'],
    'role' => $_POST['role']
));

?>

<h1 class='text-center'>Profil Crée</h1>

<?php include ('../inc/footer.inc.php') ?>