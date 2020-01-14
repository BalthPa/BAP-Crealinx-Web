<?php include('../inc/header.inc.php') ?>

<form method='post'>
    <label>Nom d'utilisateur</label>
    <input type="text" name='username' id='username' placeholder="Nom d'utilisateur">

    <label>Mail</label>
    <input type='email' name='mail' id='mail' placeholder="Mail">

    <label>Roles</label>
    <select name='role' id='role'>
        <option disabled selected>Choississez un role</option>
        <option>Créateur</option>
        <option>Spectateur</option>
    </select>

    <label>Mot de Passe</label>
    <input type="password" name='password' id='password' placeholder='Mot de Passe'>

    <input type='submit' value='Envoyer'>
</form>

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

<?php include ('../inc/footer.inc.php') ?>