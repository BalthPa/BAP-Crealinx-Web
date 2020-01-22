<div class='container-fluid'>
    <div class="d-flex justify-content-around">
        
        <div class="add-vd col-sm-7 text-center mt-5 pl-5 pr-5 h-100">

        <form class="pt-3" method="post" action="envoiVideo.php">
            <h3> Ajouter une vidéo </h3>
            <div class="form-group">
                <label for="exampleFormControlInput1"> Titre de la vidéo </label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1"> URL Youtube de la vidéo </label>
                <input type="text" class="form-control" name="url">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Source de la video</label>
                <select class="form-control" id="exampleFormControlSelect2" name="source">
                    <option disabled selected>Choisissez une source</option>
                    <option>Youtube</option>
                    <option>Vimeo</option>
                </select>
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
                <button type="submit" class="submit-vd btn">Envoyer</button>
            </div>
            </form>
        </div>

        <div class="right-side col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical shadow p-0" role="group" aria-label="Basic example">
                <div class="popcorn-solo"></div>
                <a href='watchLater.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Séries suivies </button></a>
                <hr class="col-sm-6" />
                <a href='mesVideos.php' class='block-links col-sm-12 p-0'><button type="button" class="block-series btn btn-secondary col-sm-12 bg-white p-0 border-0"> Mes vidéos </button></a>
                <div class="popcorn-multiple-trois"></div>
            </div>   

        </div>
    </div>
</div>

