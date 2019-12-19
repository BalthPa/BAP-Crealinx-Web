<?php 
	// Connexion à la base de données
	include ("inc/bddconnect.php");
	
	// Insérer dans la table galerie, à la place des entrées énoncées
	$req = $bdd->prepare('INSERT INTO video(url, createur) VALUES(:url, :createur)');
		
	// Création d'une nouvelle ligne du tableau, on remplace les champs par ceux insérer par l'admin
	$req->execute(array(
	'url' => $_POST['url'],
	'createur' => $_POST['createur']
    ));
    
    echo "Envoi réussi";
?>

<a href ="video.php"><button>Voir la vidéo</button></a>