<?php include('../inc/header.inc.php') ?>

<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-8 bg-primary text-center pl-5 pr-5">

        <form class="pt-5 pb-5" method="post" action="envoiVideo.php">
            <h3>Ajouter une vidéo</h3>
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre de la vidéo</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">URL Youtube de la vidéo</label>
                <input type="text" class="form-control" name="url">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Catégorie</label>
                <select class="form-control" id="exampleFormControlSelect2" name="categorie">
                    <option disabled selected>Choisissez</option>
                    <option>Thriller</option>
                    <option>Action</option>
                    <option>Comédie</option>
                    <option>Horreur</option>
                    <option>Western</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Equipe Technique</label>
                <input type="text" class="form-control" name="team">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nom de créateur</label>
                <input type="text" class="form-control" name="creator">
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-warning">Envoyer</button>
            </div>
        </form>
        </div>

        <div class="col-sm-4 p-5">
            <a href="mesVideos.php">    
                <div class="col-sm-12 bg-danger test text-center">
                    <h3>Mes vidéos</h3>
                </div>
            </a>    
        </div>
    </div>
</div>

<?php include('../inc/footer.inc.php') ?>