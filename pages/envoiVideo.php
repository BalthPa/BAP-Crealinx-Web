
<?php 
	// Connexion à la base de données
	include ("../inc/connection.inc.php");
	
	// Insérer dans la table galerie, à la place des entrées énoncées
	$req = $bdd->prepare('INSERT INTO video(url, title, categorie, team, synopsis, id_creator, creator) VALUES(:url, :title, :categorie, :team, :synopsis, :id_creator, :creator)');
		
	// Création d'une nouvelle ligne du tableau, on remplace les champs par ceux insérer par l'admin
	$req->execute(array(
	'url' => $_POST['url'],
	'title' => $_POST['title'],
	'categorie' => $_POST['categorie'],
	'team' => $_POST['team'],
	'synopsis' => $_POST['synopsis'],
	'id_creator' => $_POST['id_creator'],
	'creator' => $_POST['creator']
    ));


	$add = $bdd->prepare('INSERT INTO watchlater(title_video, url_video, synopsis_video) VALUES (:title_video, :url_video, :synopsis_video)');
	$add->execute(array(
		'title_video' => $_POST['title'],
		'url_video' => $_POST['url'],
		'synopsis_video' => $_POST['synopsis']
	))
?>

<h2 class='col-sm-9 text-center'> Ajout réussi </h2>

<?php 
include('mesVideos.php');
include('../inc/footer.inc.php') 
?>