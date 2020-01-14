<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Crealinx</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logo</a>
      </li>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catégories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="categorie.php?categorie=Action">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="categorie.php?categorie=Comédie">Comédie</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="categorie.php?categorie=Horreur">Horreur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="categorie.php?categorie=Thriller">Thriller</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="categorie.php?categorie=Western">Western</a>

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" >Mon profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ajoutVideo.php" >Ajouter une vidéo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" >Créer un compte</a>
      </li><li class="nav-item">
        <a class="nav-link" href="login.php" >Se connecter</a>
      </li>
    </ul>

  </div>
</nav>
