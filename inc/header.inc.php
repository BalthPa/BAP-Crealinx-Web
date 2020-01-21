<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title> Popcorn Series </title>
</head>
<body>



<nav class="navbar navbar-expand-lg d-flex p-0">

  <a class="navbar-brand mr-auto" href="index.php">
  <div class="logo"></div>
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    
    <form class="form-inline flex-fill">
      <input class="form-control up flex-fill rounded-pill" type="search" placeholder="Recherche" aria-label="Search">
    </form>

  
        <div class="nav-item dropdown ml-auto list-unstyled">
          
          <a class="dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="category-logo"></div>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="categorie.php?categorie=Action"> Action </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="categorie.php?categorie=Comédie"> Comédie </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="categorie.php?categorie=Horreur"> Horreur </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="categorie.php?categorie=Thriller"> Thriller </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="categorie.php?categorie=Western"> Western </a>
          </div>
          
        </div>

    <a class="nav-item ml-auto" href="ajoutVideo.php"> <div class="add-video-logo"></div></a>
    
    <a class="nav-item ml-auto" href="profil.php"><div class="profile-pic-logo"></div></a>
      
   
  </div>
</nav>



