<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">
        <div class="category-vd col-sm-7 text-center mt-5 shadow">

            <h1 class="text-center p-5"><?php echo $_GET['categorie'] ?></h1>
            <div class="col-sm-12 d-flex flex-wrap">
            <?php 
                include ('../inc/connection.inc.php');

                $req = $bdd->prepare('SELECT * FROM video WHERE categorie = ?'); // Montre les vidéos en fonction de la catégorie chosit, récupération en GET
                $req->execute(array($_GET['categorie']));
                while($data=$req->fetch()){
                    if ($data['source'] == 'Youtube'){
                    $yt_id = substr($data['url'], -11); // On sélectionne juste l'id de la vidéo, on coupe l'URl
            ?>
                <a href="lecteur.php?creator=<?php echo $data['id'] ?>">
                    <div class='video m-1'>
                        <h4><?php echo $data['title']?></h4>    
                        <!-- Si un utilisateur clique sur le lien -> ajout de données en GET -->
                        <a href='categorie.php?categorie=<?= $_GET['categorie'] ?>&video=<?= $data['id'] ?>' class='link-watchlater'><h6>Regarder plus tard</h6></a> 
                        <iframe src="https://www.youtube.com/embed/<?php echo $yt_id?>" frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                </a>

                <?php
                    }
                    else if ($data['source'] == 'Vimeo'){
                    $vimeo_id = substr($data['url'], -9); // On sélectionne juste l'id de la vidéo, on coupe l'URl
                ?>
                    <a href="lecteur.php?creator=<?php echo $data['id'] ?>">
                         <div class='video m-1'>
                             <h4><?php echo $data['title']?></h4>    
                            <!-- Si un utilisateur clique sur le lien -> ajout de données en GET -->
                            <a href='categorie.php?categorie=<?= $_GET['categorie'] ?>&video=<?= $data['id'] ?>' class='link-watchlater'><h6>Regarder plus tard</h6></a> 
                            <iframe src="https://player.vimeo.com/video/<?= $vimeo_id ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            
                                </div>
                            </a>


                <?php 
                }
            }
                $req->closeCursor();  
                ?>                    



        <?php
        // On récupére l'id de la vidéo grâce au GET et on change la valeur de NULL à 1
        $idVideo = $_GET['video'];
        $test = 'username_' . $_SESSION['id'];
        $change =$bdd->query("UPDATE watchlater SET $test = 1 WHERE id_video = $idVideo") ?>
        </div>  
        </div>
        <div class="right-side col-sm-3">
            <div class="div-series col-sm-12 btn-group-vertical shadow p-0" role="group" aria-label="Basic example">
                <div class="popcorn-solo"></div>
                <a href='watchLater.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Séries suivies </button></a>
                <hr class="col-sm-6" />
                <a href='mesVideos.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Mes vidéos </button></a>
                <div class="popcorn-multiple-trois"></div>
            </div>   

            <?php include ('../inc/footer.inc.php') ?>       

        </div>
    </div>
</div>

