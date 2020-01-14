<?php 
	// Connexion à la base de données
	include ("../inc/connection.inc.php");
	
	// Insérer dans la table galerie, à la place des entrées énoncées
	$req = $bdd->prepare('INSERT INTO video(url, title, categorie, team, id_creator) VALUES(:url, :title, :categorie, :team, :creator)');
		
	// Création d'une nouvelle ligne du tableau, on remplace les champs par ceux insérer par l'admin
	$req->execute(array(
	'url' => $_POST['url'],
	'title' => $_POST['title'],
	'categorie' => $_POST['categorie'],
	'team' => $_POST['team'],
	'creator' => $_POST['id_creator']
    ));
    
    echo "envoi réussi"

?>



<a href="index.php"><button>Retour à l'accueil</button></a>