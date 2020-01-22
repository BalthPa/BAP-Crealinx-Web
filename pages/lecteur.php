<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">
        <div class="blog col-sm-7 text-center mt-5 pl-5 pr-5 shadow">

        <?php 

            include ('../inc/connection.inc.php');

            // Récupération de l'id de la vidéo en méthode GET
            $id_url = $_GET['creator'];
            $req = $bdd->query("SELECT * FROM video WHERE id=$id_url");

            while($data =$req->fetch()){
                if ($data['source'] == 'Youtube'){
                $yt_id = substr($data['url'], -11); // On sélectionne juste l'id de la vidéo, on coupe l'URl
        ?>

        <div class='video col-sm-12 text-center'>  
            <h1><?php echo $data['title'] ?></h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $yt_id?>" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>Créateur : <a href='profileShow.php?creator=<?= $data['creator'] ?>'><?= $data['creator'] ?></a></h3>
        <h4>Synopsis</h4>
        <p class='text-center'> <?= $data['synopsis'] ?></p>

        </div>            
            
            <?php
                }
                else if ($data['source'] == 'Vimeo'){
                    $vimeo_id = substr($data['url'], -9); // On sélectionne juste l'id de la vidéo, on coupe l'URl
        ?>

        <div class='video col-sm-12 text-center'>  
            <h1><?php echo $data['title'] ?></h1>
            <iframe src="https://player.vimeo.com/video/<?= $vimeo_id ?>" width="560" height="315" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        <h3>Créateur : <a href='profileShow.php?creator=<?= $data['creator'] ?>'><?= $data['creator'] ?></a></h3>
        <h4>Synopsis</h4>
        <p class='text-center'> <?= $data['synopsis'] ?></p>

        </div>    


        <?php
                }
    }
        $req->closeCursor(); 
        ?>


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