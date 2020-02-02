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
      $status_false = "* Veuillez renseigner des noms valides.";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status_false = "* Veuillez rentrer une adresse e-mail valide.";
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



<div class="container contact col-sm-8 mt-5 mb-5 p-5 shadow-lg">

    <h3 class="text-center"> Contact </h3>
        <form class="col-sm-12 m-0 p-0" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            
            <fieldset class="mt-4">
                <legend> Pour pouvoir nous transmettre votre avis, veuillez renseigner les champs suivants. <br />
                         Les noms et prénoms ne doivent pas comporter d'accent.
                </legend>

                <?php if (!empty($status_false)) { 
                  echo '<p class="message-error text-danger mt-5 mb-2 p-4">' .$status_false. '</p>';
                }
                      if (!empty($status_true)) { 
                  echo '<p class="message-success text-success mt-5 mb-2 p-4">' .$status_true. '</p>';
                }?>
                 
                 <div class="form-group mt-3">
                   <input type="text" class="form-control rounded-pill pl-3" id="first_name" name="first_name" placeholder="Prénom">
                 </div>

                 <div class="form-group">
                   <input type="text" class="form-control rounded-pill pl-3" id="last_name" name="last_name" placeholder="Nom de famille">
                 </div>
                 
                 <div class="form-group">
                   <input type="email" class="form-control rounded-pill pl-3" id="email" name="email" placeholder="Adresse e-mail">
                 </div>

                 <div class="form-group">
                    <textarea class="form-control rounded-lg" id="biography" name="biography" rows="10"></textarea>
                 </div>

                 <input class="btn btn-primary submit mt-5 border-0" type="submit" value="Soumettre">
            </fieldset>
        </form>
</div>

<?php include ('../inc/footer.inc.php') ?>     


