<?php include('../inc/header.inc.php') ?>

<?php 

    include('../inc/connection.inc.php');
    $req = $bdd->prepare('INSERT INTO blog (user, text) VALUES (:user, :text)');
    $req->execute(array(
        'user' => $_POST['user'],
        'text' => $_POST['content']
    ));

?>

<h1></h1>

<?php include('../inc/footer.inc.php') ?>