<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php include('includes/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="resources/css/carousel.css">
</head>

<body class="bg-dark">

<!-- this will be the home page -->

<!-- brand logo -->

<div class="row logo-wrapper">
    <div class="col-12 pt-3 bg-dark">
        <center><img src="resources/images/placeholder.png" class="brand-img ml-auto mr-auto" alt="More Than Story"></center>
    </div>
</div>

<!-- /brand logo -->

<!-- navigation bar -->

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">

  <a class="navbar-brand" href="#">More Than Story</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>

    <!-- search bar is for future implementations -->

    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

  </div>
</nav>

<!-- /navigation bar -->

<!-- main container -->

<div class="container-fluid bg-dark">

  <div class="row">
    <div class="col-xl-8">

      <!-- carousel wrapper -->

      <div class="gallery">
        <div class="gallery-container">
          <img class="gallery-item" src="resources/images/placeholder.png">
          <img class="gallery-item" src="resources/images/placeholder.png">
          <img class="gallery-item" src="resources/images/placeholder.png">
          <img class="gallery-item" src="resources/images/placeholder.png">
          <img class="gallery-item" src="resources/images/placeholder.png">
        </div>
        <div class="gallery-controls"></div>
      </div>

      <!-- /carousel wrapper -->

    </div>

    <div class="col-xl-3 pt-3 text-light">
      <h1 class="mt-3 text-center">Welcome to More Than Story</h1><br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quia debitis accusantium, quasi necessitatibus eius cum excepturi optio distinctio repellendus nihil, doloribus similique dolores suscipit impedit. Earum maxime perferendis ea?</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est eos et, asperiores incidunt vel deleniti, ab assumenda perferendis qui corporis, voluptatibus minus? Expedita vitae consequuntur quaerat tempora est aut velit!</p>
    </div>
  </div>

  <!-- latest artiles -->
  


  <!-- /latest articles -->

</div>

<!-- /main container -->



<?php include('includes/footer.php'); ?>


</body>

</html>


