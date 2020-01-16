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



?>
<div class='container-fluid'>
    <div class="row">
        <div class="actu col-sm-9 border border-info text-center p-5 mt-2">
            <h1 class='text-center'>Profil Crée</h1>

            <h2>Se connecter</h2>
            <form method="post" action='setWatchLater.php'>
                <div class='form-group'>
                <label>Nom d'utilisateur</label>
                <input type='text' name='username' class='form-control' placeholder="Nom d'utilisateur">
                </div>

                <div class='form-group'>
                <label>Mot de passe</label>
                <input type='password' name='password' class='form-control' placeholder="Mot de passe">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
    </div>
</div>  

<?php include ('../inc/footer.inc.php') ?>