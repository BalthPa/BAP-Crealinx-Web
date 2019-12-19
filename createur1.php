<?php 
require __DIR__ . "/vendor/autoload.php";
?>

<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <link href="style.css" type='text/css' rel='stylesheet'>
</head>

<body>
<div class='videos'>
<?php
include ('inc/bddconnect.php');

$req =$bdd->query('SELECT * FROM video
INNER JOIN users ON video.createur = users.createur
WHERE 
');
while($donnees=$req->fetch()){
    $yt_id = substr($donnees['url'], -11); // On récupére les 11 derniers caractères de l'URL, ce qui correspond à l'id Youtube
    ?>

<div class='video'>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $yt_id?>" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<?php
}
$req->closeCursor(); 
?>

</body>
</html>