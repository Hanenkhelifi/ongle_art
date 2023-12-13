<?php
include "./assets/database/db.php";



/***annuler errer */
error_reporting(0);
ini_set("display_errors", 0);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Ongle Art</title>
  <!-- /********************css de barre de recherche***************************** */ -->
  <style>
    * {
      box-sizing: border-box;
    }



    .topnav {
      overflow: hidden;
      background-color: #e9e9e9;
    }


    .topnav .search-container {
      float: right;
    }

    .topnav input[type=search] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }
  </style>
  <!-- /********************************************* */ -->
</head>

<body>
  <header class="text-center header-social-icon text-lg-start bg-primary text-white">
    <div class="container">
      <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
        <div class="me-5 d-lg-block d-none">
          <span>Un instant bien-être rien que pour vous.</span>
        </div>
        <!-- /*****************barre de recherche ********************/ -->


        <div class="topnav">

          <div class="search-container">
            <form action="service.php" name="fo" method="GET">
              <input type="search" placeholder="rechercher..." name="search" value="<?= $search ?>"  >
              <button type="submit" name="valider" value="rechercher"><i class="fa fa-search"></i></button>
            </form>
            <!--****************/-->
      

          </div>
        </div>



        <!-- <**********************recherche youtube******/ -->
        <div>
          <a href="https://www.facebook.com/" class="me-4 text-reset">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="http://www.twitter.com" class="me-4 text-reset">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="http://www.google.com" class="me-4 text-reset">
            <i class="fa fa-google"></i>
          </a>
          <a href="http://www.instagram.com" class="me-4 text-reset">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </section>
    </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand fw-bold" href="./index.php">Ongle Art</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item m-3">
            <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
          </li>
         
          <li class="nav-item m-3">
            <a class="nav-link" href="service.php">Nos services</a>
          </li>
          <li class="nav-item m-3">
            <a class="nav-link" href="#">Nos Tarifs</a>
          </li>
         
        </ul>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <?php if (isset($_SESSION["id"]) && $_SESSION["id"]) { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" class="get_btn " href="logout.php" role="button ">Log Out</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" class="get_btn " href="login.php" role="button ">Login</a>
            </li>
            <h3> | </h3>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" class="get_btn " href="signup.php" role="button ">Sign Up</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>