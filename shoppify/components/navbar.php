<?php 
include_once('./controllers/cart.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>Shoppify</title>
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-info navbar-dark py-3 fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">Shoppify</a>

      <!-- creating a navbar toogle icon -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- End of  the toogle icon -->
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav  ms-auto" style="font-size: 1.2rem;">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="store.php" class="nav-link">Store</a>
          </li>
          <li class="nav-item">
            <a href="cart.php" class="nav-link">Cart <?= $CartCount; ?></a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--End of navbar-->