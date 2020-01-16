<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-9 bg-primary text-center p-5">
        <h1 class="text-center"><?php echo $_GET['categorie'] ?></h1>
            <div class="col-sm-12 d-flex flex-wrap">
            <?php 

            include ('../inc/connection.inc.php');

            $req = $bdd->prepare('SELECT * FROM video WHERE categorie = ?');
            $req->execute(array($_GET['categorie']));
            while($data=$req->fetch()){
                $yt_id = substr($data['url'], -11);
            ?>
        <a href="lecteur.php?creator=<?php echo $data['id'] ?>">
        <div class='video m-1'>
        <h4><?php echo $data['title']?></h4>    
        <iframe src="https://www.youtube.com/embed/<?php echo $yt_id?>" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </a>

        <a href='categorie.php?categorie=<?= $_GET['categorie'] ?>&video=<?= $data['id'] ?>'>Ajouter</a>




<?php
}
$req->closeCursor(); 
?>

<?php
    $idVideo = $_GET['video'];
    $test = 'username_' . $_SESSION['id'];
    $change =$bdd->query("UPDATE watchlater SET $test = 1 WHERE id_video = $idVideo") ?>
        </div>  
        </div>

        <div class="right-side col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical" role="group" aria-label="Basic example">
                <a class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries suivies </button></a>
                <a href='watchLater.php' class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries à regarder plus tard </button></a>
                <a href='mesVideos.php' class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Mes vidéos </button></a>
            </div>          
        </div>
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>

