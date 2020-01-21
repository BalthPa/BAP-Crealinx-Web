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
<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">
        <div class="category-vd col-sm-7 text-center mt-5 shadow">
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

        <div class="right-side col-sm-3">

        <div class="div-series col-sm-12 btn-group-vertical shadow p-0" role="group" aria-label="Basic example">
            <a href='watchLater.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Séries suivies </button></a>
            <hr class="col-sm-6" />
            <a href='mesVideos.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Mes vidéos </button></a>
        </div>   

        <?php include ('../inc/footer.inc.php') ?>       

    </div>
        
    </div>
</div>  
