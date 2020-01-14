<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-9 bg-primary text-center">
        <h1 class="text-center">Mes vidéos</h1>
            <div class="col-sm-12 d-flex flex-wrap">
            <?php 


            include ('../inc/connection.inc.php');

            $req = $bdd->query("SELECT * FROM video WHERE id_creator = '".$_SESSION['id']."'");

            while($data=$req->fetch()){
                $yt_id = substr($data['url'], -11);
            ?>
        <a href="lecteur.php?creator=<?php echo $data['id'] ?>">
            <div class='video m-3'>
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

        <!--<div class="col-sm-3 p-5 align-center">
        <a href="test.php">
            <div class="col-sm-12 bg-danger block-series text-center m-auto">
                <h4>Séries suivis</h4>
            </div>
        </a>
        <a href="#">
            <div class="col-sm-12 bg-danger block-series text-center">
                <h4 class="align-middle">Séries à regarder plus tard</h4>
            </div>
        </a>
        <a href="mesVideos.php">    
            <div class="col-sm-12 bg-danger block-series text-center pt-auto pb-auto">
                <h4>Mes vidéos</h4>
            </div>
        </a>    
        </div>-->
        <div class="right-side col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical" role="group" aria-label="Basic example">
                <a class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries suivies </button></a>
                <a class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries à regarder plus tard </button></a>
                <a href='mesVideos.php' class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Mes vidéos </button></a>
            </div>          
        </div>
        
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>

