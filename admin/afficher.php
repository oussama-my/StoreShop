<?php

session_start();

if(!isset($_SESSION['santoryou'])){
  header("Location: ../login.php");
}
if(empty($_SESSION['santoryou'])){
  header("Location: ../login.php");
}

require("../config/commandes.php");
$Produits=afficher();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">STORESHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../admin">Nouveau</a>
        </li>
             <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Suppression</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="afficher.php" style="font-weight: bold">Produits</a>
        </li>
      </ul>
    </div>
    <div style="display: flex; justify-content: flex-end;" >
    <a href="deconnexion.php" class="btn btn-danger">Se Deconnecter</a>
</div>
  </div>
</nav>

    <body>

    <div class="album py-5 bg-light">
     <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Images</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($Produits as $Produit): ?>

    <tr>
      <th scope="row"><?= $Produit->id ?></th>
      <td><img src="<? $Produit->image ?>"style="width:30%"></td>
      <td><?= $Produit->nom ?></td>
      <td style="font-weight: bold; color: green;"><?= $Produit->prix ?>Dhs</td>
      <td><?= substr($Produit->description, 0, 200); ?>...</td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  </div>
  </div></div>

</body>
</html>
