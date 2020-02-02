<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">
        <div class="blog col-sm-7 text-center mt-5 pl-5 pr-5 shadow">
        <h1 class="text-center">Mes vidéos</h1>
            <div class="col-sm-12 d-flex flex-wrap">
            <?php 


            include ('../inc/connection.inc.php');
            // On récupère l'id de l'utilisateur pour afficher seulement ses vidéos
            $idCreator = $_SESSION['id'];
            $req = $bdd->query("SELECT * FROM video WHERE id_creator = $idCreator ORDER BY id DESC");

            while($data=$req->fetch()){
                $yt_id = substr($data['url'], -11); // On sélectionne juste l'id de la vidéo, on coupe l'URl
            ?>
        <a href="lecteur.php?creator=<?= $data['id'] ?>" class='col-sm-12 maVideo'>
            <div class='video m-3 d-flex justify-space-around'>    
                <iframe src="https://www.youtube.com/embed/<?= $yt_id?>" frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class='d-block'>
                <h4><?= $data['title']?></h4><br>
                <p class='text-left ml-4'><?= $data['synopsis'] ?></p>
                </div>    
            </div>
        </a>


<?php
}
$req->closeCursor(); 
?>
        </div>  
        </div>
        
        <div class="right-side col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical shadow p-0" role="group" aria-label="Basic example">
                <a href='watchLater.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Séries suivies </button></a>
                <hr class="col-sm-6" />
                <a href='mesVideos.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Mes vidéos </button></a>
            </div>   

            <?php include ('../inc/footer.inc.php') ?>       

        </div>
        
    </div>
</div>

