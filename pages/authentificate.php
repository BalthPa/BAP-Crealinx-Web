<?php 

session_start();
include('../inc/connection.inc.php');
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Remplir les champs');
}
if($bdd = $req->prepare('SELECT id, password FROM accounts WHERE username = ?')){
    $bdd->bind_param('s', $_POST['username']);
    $bdd->execute();
    $bdd->store_result();

    if ($bdd->num_rows > 0) {
        $bdd->bind_result($id, $password);
        $bdd->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if ($_POST['password'] === $password) {
            // Verification success! User has loggedin!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['username'] . '!';
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }

    $bdd->close();
}

?>