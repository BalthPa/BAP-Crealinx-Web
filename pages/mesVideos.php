<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-10 bg-primary text-center pl-5 pr-5">
        <h1 class="text-center">Mes vidéos</h1>
            <div class="row">
            <?php 


            include ('../inc/connection.inc.php');

            $req = $bdd->query('SELECT * FROM video');
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

        <div class="col-sm-2 p-5">
        <a href="#">
            <div class="col-sm-12 bg-danger test text-center">
                <h4>Séries suivis</h4>
            </div>
        </a>
        <a href="#">
            <div class="col-sm-12 bg-danger test text-center">
                <h4>Séries à regarder plus tard</h4>
            </div>
        </a>   
        </div>
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>

