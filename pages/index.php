<?php include ('../inc/header.inc.php') ?>


<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-10 bg-primary text-center pl-5 pr-5">
            <div class="col-sm-12  text-center p-5">
                <h3>Fil d'actualité</h3>
            </div>

            <form method='post'>
                <div class="form-group">
                    <input type="text" class="form-control" name='user' aria-describedby="emailHelp" placeholder="User">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name='content' placeholder="Post"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <div class="dropdown-divider"></div>
            </form>

            <?php //ENVOI DONNEES A LA BDD

            include('../inc/connection.inc.php');
            $req = $bdd->prepare('INSERT INTO blog (user, text) VALUES (:user, :text)');
             $req->execute(array(
                'user' => $_POST['user'],
                'text' => $_POST['content']
            ));

            ?>

            <?php  //RECUPERATION DES DONNEES
                include('../inc/connection.inc.php');
                $req = $bdd->query('SELECT * FROM blog ORDER BY id DESC');
                while($data=$req->fetch()){
?>

            <div class="col-sm-12 bg-warning mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h3><?= $data['user'] ?></h3>
                        <p><?= $data['text'] ?></p>
                    </div>
                </div>
            </div>    

<?php
                }
                $req->CloseCursor();
            ?>


           
            <!--
            <div class="col-sm-12 bg-warning mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h3 >Jane Doe</h3>
                        <p>Trop bien la dernière vidéo de</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 bg-info mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h3 >Jane Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni delectus quae minima eius natus quidem amet consectetur, laborum provident accusamus deserunt vero ipsam in nisi maiores tempora, eum ipsum sapiente.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 bg-info mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h3 >Jane Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis repudiandae quae vero tempora libero molestias! Distinctio doloremque magni odit cupiditate explicabo. Sapiente, maiores possimus odio maxime exercitationem sint libero nobis!</p>
                    </div>
                </div>
            </div> -->
        </div> 

        <div class="col-sm-2 p-5 align-center">
        <a href="#">
            <div class="col-sm-12 bg-danger block-series text-center m-auto">
                <h6>Séries suivis</h6>
            </div>
        </a>
        <a href="#">
            <div class="col-sm-12 bg-danger block-series text-center">
                <h6 class="align-middle">Séries à regarder plus tard</h6>
            </div>
        </a>
        <a href="mesVideos.php">    
            <div class="col-sm-12 bg-danger block-series text-center pt-auto pb-auto">
                <h6>Mes vidéos</h6>
            </div>
        </a>    
        </div>
    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>

