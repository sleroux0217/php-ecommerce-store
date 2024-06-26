<?php
include(__DIR__ . '/../init_session.php');
//include('../server/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Robots no index and no follow-->
  <meta name="robots" content="noindex, nofollow">
  <title>Home</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top shadow-sm">
    <div class="container">
      <a href="/" class="navbar-brand">
        <h2 class="brand">Outdoorphoto</h2>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link position-relative" href="cart.php">
              <i class="fas fa-shopping-bag"></i>
              <?php if (isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) { ?>
                <span class="cart-quantity badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle"><?php echo $_SESSION['quantity']; ?></span>
              <?php } ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="account.php">
              <i class="fas fa-user"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>