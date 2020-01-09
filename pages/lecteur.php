<?php include ('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-10 bg-primary text-center">

        <?php 

            include ('../inc/connection.inc.php');

            $id_url = $_GET['creator'];
            $req = $bdd->query("SELECT * FROM video WHERE id='$id_url'");
            
            //$req->execute(array($_GET['creator']));

            while($data =$req->fetch()){
                $yt_id = substr($data['url'], -11);
        ?>

        <div class='video col-sm-10'>  
            <h1><?php echo $data['title'] ?></h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $yt_id?>" frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>            

        <?php
        }
        $req->closeCursor(); 
        ?>

        </div>

        <div class="col-sm-2 p-5">
        <a href="#">
            <div class="col-sm-12 bg-danger test text-center">
                <h3>Séries suivis</h3>
            </div>
        </a>
        <a href="#">
            <div class="col-sm-12 bg-danger test text-center">
                <h3>Séries à regarder plus tard</h3>
            </div>
        </a>
        <a href="#">    
            <div class="col-sm-12 bg-danger test text-center">
                <h3>Mes vidéos</h3>
            </div>
        </a>    
        </div>
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>