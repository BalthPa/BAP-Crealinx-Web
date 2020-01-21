<div class='container-fluid'>
    <div class="d-flex justify-content-around">
        <div class="category-vd col-sm-7 text-center mt-5 shadow">
            <h1>A regarder plus tard</h1>
            <div class="col-sm-12 d-flex flex-wrap">
        
                <?php 
                include('../inc/connection.inc.php');
                $idUser = 'username_' . $_SESSION['id'];
                $req = $bdd->query("SELECT * FROM watchlater WHERE $idUser = 1 ");
                while($data = $req->fetch()){
                    $yt_id = substr($data['url_video'], -11)
                ?>

                <a href='lecteur.php?creator=<?= $data['id_video'] ?>'>
                    <div class='video m-1'>
                        <h4><?php echo $data['title_video']?></h4>    
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


