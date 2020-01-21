<?php include('../inc/header.inc.php') ?>

<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">

<?php
    include('../inc/connection.inc.php');
    $req = $bdd->prepare('SELECT * FROM accounts WHERE username = ?');
    $req->execute(array($_GET['creator']));
    
    while($data = $req->fetch()){
        ?>
        <div class="category-vd col-sm-7 text-center mt-5 shadow">

            <div class="col-sm-12 text-center p-3">
                <h1 class='text-uppercase'><?= $data['username'] ?></h1>
            </div>

            <img class="rounded-circle w-25 p-3 border border-secondary" src="../img/pp.png" alt=""/>

            <div class="col-sm-12 mb-5 mt-5">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="badge badge-dark pull">Rôle : <?= $data['role'] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center p-3">
                <p class="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus purus vitae libero vestibulum fringilla. 
                    Vivamus aliquam sit amet ligula eget suscipit. Etiam eu nisl auctor, vehicula enim nec, gravida libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                     Donec cursus dignissim leo, a gravida libero. Donec semper justo eget sagittis rutrum. Fusce in ante tincidunt, dictum enim id, ullamcorper arcu. Nam eget justo ac erat malesuada consectetur id et magna. 
                     Sed sollicitudin pretium felis vitae bibendum. Quisque ex mi, pulvinar ac volutpat ac, fermentum a nisi.
                </p>
            </div>

            <div class="col-sm-12 text-center p-3">
                <h1>Mes réalisations</h1>
                <div class="col-sm-12 d-flex flex-wrap">

            <?php
    }
    $req->closeCursor();
?>


            <?php
                $req = $bdd->prepare("SELECT * FROM video WHERE creator = ? ORDER BY id DESC");
                $req->execute(array($_GET['creator']));
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
    
    
    <?php
    }
    $req->closeCursor(); 
    ?>
            </div>
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
