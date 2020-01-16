<?php include('../inc/header.inc.php') ?>
<?php
include('../inc/connection.inc.php');

//$password = password_hash('$_POST["password"]', PASSWORD_DEFAULT);
$passwordForm = htmlspecialchars($_POST['password']);
$password = md5($passwordForm);

$req= $bdd->prepare('INSERT INTO accounts (username,password,mail,role) VALUES (:username, :password, :mail, :role)');
$req->execute(array(
    'username' => htmlspecialchars($_POST['username']),
    'password' => $password,
    'mail' => $_POST['mail'],
    'role' => $_POST['role']
));


$add = $bdd->query("ALTER TABLE watchlater ADD $newUser INT(11)");

?>

<h1 class='text-center'>Profil Crée</h1>

<?php include ('../inc/footer.inc.php') ?>