<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-10 bg-primary text-center pl-5 pr-5">
        <h1 class="text-center"><?php echo $_GET['categorie'] ?></h1>
            <div class="row">
            <?php 


            include ('../inc/connection.inc.php');

            $req = $bdd->prepare('SELECT * FROM video WHERE categorie = ?');
            $req->execute(array($_GET['categorie']));
            while($data=$req->fetch()){
                $yt_id = substr($data['url'], -11);
            ?>
        <a href="lecteur.php?creator=<?php echo $data['id'] ?>">
        <div class='video col-sm-4'>
        <h4><?php echo $data['title']?></h4>    
        <iframe src="https://www.youtube.com/embed/<?php echo $yt_id?>" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </a>


<?php
}
$req->closeCursor(); 
?>
        </div>  
        </div>

        <div class="col-sm-2 p-5 align-center">
        <a href="#">
            <div class="col-sm-12 bg-danger block-series text-center m-auto">
                <h6>Séries suivis</h6>
            </div>
        </a>
        <a href="#">
            <div class="col-sm-12 bg-danger block-series text-center">
                <h6 class="align-middle">Séries à regarder plus tard</h6>
            </div>
        </a>
        <a href="mesVideos.php">    
            <div class="col-sm-12 bg-danger block-series text-center pt-auto pb-auto">
                <h6>Mes vidéos</h6>
            </div>
        </a>    
        </div>
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>

