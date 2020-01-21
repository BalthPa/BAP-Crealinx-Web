<div class='container-fluid mb-5'>
    <div class="d-flex justify-content-around">
        <div class="category-vd col-sm-7 text-center mt-5 shadow">
            <h1>Créer son compte</h1>

            <form method='post' action='register.php'> 
                <div class="form-group">
                    <label>Nom d'utilisateur</label>
                    <input type="text" class="form-control" name='username' placeholder='Pseudo'>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name='mail' placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label>Roles</label>
                    <select name='role' id='role' class='form-control'>
                        <option disabled selected>Choississez un role</option>
                        <option>Créateur</option>
                        <option>Spectateur</option>
                    </select>
                </div>  

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name='password'>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <h2>Se connecter</h2>
            <form method="post" action='login.php'>
                <div class='form-group'>
                <label>Nom d'utilisateur</label>
                <input type='text' name='username' class='form-control' placeholder="Nom d'utilisateur">
                </div>

                <div class='form-group'>
                <label>Mot de passe</label>
                <input type='password' name='password' class='form-control' placeholder="Mot de passe">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
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
