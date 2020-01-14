<?php include ('../inc/header.inc.php') ?>
<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-9 bg-primary text-center pl-5 pr-5 blog">
            <div class="col-sm-12  text-center p-5">
                <h3>Fil d'actualité</h3>
                <p>N'oublie pas de te connecter</p>
            </div>

            <form method='post'>
                <div class="form-group">
                    <input type="hidden" name='id_user' value='<?= $_SESSION['id'] ?>'>
                </div>
                <div class="form-group">
                    <input type="hidden" name='username' value='<?= $_SESSION['username'] ?>'>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name='content' placeholder="Post"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
                <div class="dropdown-divider"></div>
            </form>

            <?php 
            //ENVOI DONNEES A LA BDD
            if (isset($_SESSION['id'])){
                include('../inc/connection.inc.php');
                $req = $bdd->prepare('INSERT INTO blog (id_user, username, text) VALUES (:id_user, :username, :text)');
                 $req->execute(array(
                    'id_user' => $_POST['id_user'],
                    'username' => $_POST['username'],
                    'text' => $_POST['content']
                ));
            }

            ?>

            <?php  
            //RECUPERATION DES DONNEES
                include('../inc/connection.inc.php');
                $req = $bdd->query('SELECT * FROM blog ORDER BY id DESC LIMIT 50');
                while($data=$req->fetch()){
            ?>

            <div class="col-sm-12 bg-warning mt-5 mb-5">
                <div class="row">
                    <a href='profileShow.php?creator=<?= $data['username']?>' class='col-sm-12'>
                    <div class="col-sm-12 text-left">
                        <p class="font-weight-bold"><?= $data['username'] ?></p>
                        <p><?= $data['text'] ?></p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="dropdown-divider"></div>    

            <?php
                }
                $req->CloseCursor();
            ?>

        </div> 

        <div class="right-side col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical" role="group" aria-label="Basic example">
                <a class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries suivies </button></a>
                <a class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Séries à regarder plus tard </button></a>
                <a href='mesVideos.php' class='col-sm-12'><button type="button" class="block-series btn btn-secondary col-sm-12"> Mes vidéos </button></a>
            </div>          
        </div>

    </div>
</div>

<?php include ('../inc/footer.inc.php') ?>

