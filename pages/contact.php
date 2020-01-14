<?php include ('../inc/header.inc.php');
      include ('../inc/connection.inc.php');

$status_false = ""; // Etat de l'envoi des données incorrectes
$status_true = ""; // Etat de l'envoi des données correctes

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $biography = $_POST['biography'];

  if(empty($first_name) || empty($last_name) || empty($email) || empty($biography)) {
      $status_false = "Veuillez renseigner tous les champs.";
  } else {
    if(strlen($first_name) >= 255 || !preg_match(" /^[a-zA-Z-'\s]+$/ ", $first_name) 
    || strlen($last_name) >= 255 || !preg_match(" /^[a-zA-Z-'\s]+$/ ", $last_name)) {
      $status_false = "Veuillez renseigner des noms valides.";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status_false = "Veuillez rentrer une adresse e-mail valide.";
    } else {

      $sql = "INSERT INTO contact (first_name, last_name, email, biography)
              VALUES (:first_name, :last_name, :email, :biography)";

      $stmt = $bdd -> prepare($sql);

      $stmt -> execute(['first_name' => $first_name, 'last_name' => $last_name, 
                        'email' => $email, 'biography' => $biography]);

      $status_true = "Votre message a bien été envoyé.";
      $first_name = "";
      $last_name = "";
      $email = "";
      $biography = "";
    }
  }
}



?>



<div class="container">

    <h1 class="mt-5"> Contact </h1>
        <form class="col-sm-12 m-0 p-0" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            
            <fieldset class="mt-4">
                <legend> Pour pouvoir nous transmettre votre avis, veuillez renseigner votre nom, prénom ainsi que votre adresse e-mail </legend>

                <?php if (!empty($status_false)) { 
                  echo '<p class="message-error text-danger mt-5 mb-2 p-4">' .$status_false. '</p>';
                }
                      if (!empty($status_true)) { 
                  echo '<p class="message-success text-success mt-5 mb-2 p-4">' .$status_true. '</p>';
                }?>
                 
                 <div class="form-group mt-3">
                   <label for="nom"> Prénom </label>
                   <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Jonathan">
                 </div>

                 <div class="form-group">
                   <label for="nom"> Nom </label>
                   <input type="text" class="form-control" id="last_name" name="last_name">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre adresse e-mail</label>
                   <input type="email" class="form-control" id="email" name="email" placeholder="louis9@free.fr">
                 </div>

                 <div class="form-group">
                   <label for="bio"> Votre message </label>
                   <textarea class="form-control" id="biography" name="biography" rows="5"></textarea>
                 </div>

                 <input class="btn btn-primary" type="submit" value="Soumettre">
            </fieldset>
        </form>
</div>


