<div class='container-fluid'>
    <div class="row">
        <div class="col-sm-9 bg-primary text-center pl-5 pr-5 h-100">

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
                <label for="exampleFormControlInput1">Synopsis</label>
                <textarea class="form-control" name="synopsis"></textarea>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="id_creator" value='<?= $_SESSION['id']?>'>
            </div>

            <div class="form-group">
                <input type="hidden" class="form-control" name="creator" value='<?= $_SESSION['username']?>'>
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-warning">Envoyer</button>
            </div>
            </form>
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

