<?php

session_start();

if(!isset($_SESSION['santoryou'])){
  header("Location: ../login.php");
}
if(empty($_SESSION['santoryou'])){
  header("Location: ../login.php");
}

require("../config/commandes.php");

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
          <a class="nav-link active" aria-current="page" href="../admin" style="font-weight: bold">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Suppression</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="afficher.php" >Produits</a>
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
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
    <input type="name" class="form-control" name="image" equired>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom de produit</label>
    <input type="texte" class="form-control" name="nom" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix" required>
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control" class="form-control" name="desc" required></textarea>
  </div>

  <button type="submit" name="valider" class="btn btn-success">Ajouter un nouveau Produit</button>
</form>

    </div></div></div>

</body>
</html>

<?php
  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc']))
    {
      $image = htmlspecialchars(strip_tags($_POST['image']));
      $nom = htmlspecialchars(strip_tags($_POST['nom']));
      $prix = htmlspecialchars(strip_tags($_POST['prix']));
      $desc = htmlspecialchars(strip_tags($_POST['desc']));

     try 
          {
            ajouter($image, $nom, $prix, $desc);
          } 
          catch (Exception $e) 
          {
            $e->getMessage();
          }
    }
    }
  }
?>
