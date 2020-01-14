<?php include ('../inc/header.inc.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Profil</title>
</head>
<body>

<div class='container-fluid'>
    <div class="row">
        <div class="actu col-sm-9 border border-info text-center pl-5 pr-5">

            <div class="col-sm-12  text-center p-3">
                <h1> Profil </h1>
            </div>

            <img class="rounded-circle w-25 p-3" src="../img/profil.jpg" alt=""/>

            <div class="col-sm-12  text-center p-3">
                <span class="badge badge-info text-uppercase">Lucas Schrever</span>
            </div>

            <div class="col-sm-12 mb-5">
                <div class="row">
                    <div class="col-sm-12">
                        <span class="badge badge-dark pull">Rôle : Créateur</span>
                    </div>
                    <div class="col-sm-12">
                        <span class="badge badge-dark">Date de naissance : 14/05/2000</span>
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

            <div class="col-sm-12  text-center p-3">
                <h1>Mes réalisations</h1>
            </div>

            
            <div class="container" id="mesRealisations">
                <div class="row">
                    <div class="col">
                    <h5>Le retour de la momie</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/48OJbbI0DfE" allowfullscreen=""></iframe>
                        </div>

                    </div>
                    <div class="col">
                    <h5>Mort subite</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/48OJbbI0DfE" allowfullscreen=""></iframe>
                        </div>

                    </div>
                    <div class="col">
                        <h5>Star Wars VII</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/48OJbbI0DfE" allowfullscreen=""></iframe>
                        </div>

                    </div>
                </div>
            </div>
















        </div>

        <div class="right-side border border-success col-sm-3">

            <div class="div-series col-sm-12 btn-group-vertical" role="group" aria-label="Basic example">
                <button type="button" class="block-series btn btn-secondary col-sm-12"> Séries suivies </button>
                <button type="button" class="block-series btn btn-secondary col-sm-12"> Séries à regarder plus tard </button>
                <button type="button" class="block-series btn btn-secondary col-sm-12"> Mes vidéos </button>
            </div>          
        </div>
    </div>
</div>


    


















    
</body>
</html>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php include ('../inc/footer.inc.php') ?>







