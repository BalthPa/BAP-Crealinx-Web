<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">
        <div class="category-vd col-sm-7 text-center mt-5 shadow blog">
            <h1>A regarder plus tard</h1>
            <div class="col-sm-12 d-flex flex-wrap">
        
                <?php 
                // Affichage des vidéos qu'on a mis 'A regarder plus tard'
                include('../inc/connection.inc.php');
                $idUser = 'username_' . $_SESSION['id'];
                $req = $bdd->query("SELECT * FROM watchlater WHERE $idUser = 1 "); // Prend les vidéos qui ont une valeur de 1
                while($data = $req->fetch()){
                    if ($data['source_video'] == 'Youtube'){
                    $yt_id = substr($data['url_video'], -11) // On sélectionne juste l'id de la vidéo, on coupe l'URl
                ?>

                <a href="lecteur.php?creator=<?= $data['id_video'] ?>" class='col-sm-12 videoSuivie'>
                    <div class='video m-3 d-flex justify-space-around'>    
                        <iframe src="https://www.youtube.com/embed/<?= $yt_id?>" frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class='d-block'>
                            <h4 class='ml-5'><?= $data['title_video']?></h4><br>
                            <p class='text-left ml-4'><?= $data['synopsis_video'] ?></p>
                        </div>    
                    </div>
                </a>          

                <?php 
                    }

                    else if ($data['source_video'] == 'Vimeo'){
                        $vimeo_id = substr($data['url_video'], -9) // On sélectionne juste l'id de la vidéo, on coupe l'URl
                    ?>
    
                    <a href="lecteur.php?creator=<?= $data['id_video'] ?>" class='col-sm-12 videoSuivie'>
                        <div class='video m-3 d-flex justify-space-around'>    
                        <iframe src="https://player.vimeo.com/video/<?= $vimeo_id ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            <div class='d-block'>
                                <h4 class='ml-5'><?= $data['title_video']?></h4><br>
                                <p class='text-left ml-4'><?= $data['synopsis_video'] ?></p>
                            </div>    
                        </div>
                    </a>   

                

            <?php
        }}
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


