<?php include ('../inc/header.inc.php') ?>



<div class="container">

    <h1 class="mt-5"> Formulaire </h1>
        <form class="col-sm-12 m-0 p-0" action="index.php" method="post">
            
            <fieldset class="mt-4">
                <legend> Pour pouvoir nous transmettre votre avis, veuillez renseigner votre nom, prénom ainsi que votre adresse e-mail </legend>
                 
                 <div class="form-group mt-3">
                   <label for="nom"> Nom de famille </label>
                   <input type="text" class="form-control" id="nom" placeholder="Jonathan">
                 </div>

                 <div class="form-group">
                   <label for="nom"> Prénom </label>
                   <input type="text" class="form-control" id="nom">
                 </div>
                 
                 <div class="form-group">
                   <label for="email">Entrez votre mail</label>
                   <input type="email" class="form-control" id="email" placeholder="louis9@free.fr">
                 </div>

                 <div class="form-group">
                   <label for="bio"> Votre message </label>
                   <textarea class="form-control" id="bio" rows="5"></textarea>
                 </div>

                 <input class="btn btn-primary" type="submit" value="Soumettre">
            </fieldset>
        </form>
</div>