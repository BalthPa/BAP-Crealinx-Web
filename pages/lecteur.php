<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-9 bg-primary text-center">

        <?php 

            include ('../inc/connection.inc.php');

            $id_url = $_GET['creator'];
            $req = $bdd->query("SELECT * FROM video WHERE id='$id_url'");
            
            //$req->execute(array($_GET['creator']));

            while($data =$req->fetch()){
                $yt_id = substr($data['url'], -11);
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
        $req->closeCursor(); 
        ?>

        </div>

        <div class="right-side col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical" role="group" aria-label="Basic example">
                <a><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries suivies </button></a>
                <a><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries à regarder plus tard </button></a>
                <a href='mesVideos.php'><button type="button" class="block-series btn btn-secondary col-sm-12"> Mes vidéos </button></a>
            </div>          
        </div>
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>