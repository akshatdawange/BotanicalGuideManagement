<?php
include_once('Connection.php');
?>

<!DOCTYPE html>
<html> 
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body style="background-color: #425F57">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <img src="images/logo.png" width="40" height="40">
      <a class="navbar-brand" href="Homepage.php">GardenByte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Stats.php">Stats</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="adminLogin.php">Logout</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="userinfo.php">Login</a>
          </li> -->
        </ul>
        
      </div>
    </div>
  </nav>
  

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <!-- <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li> -->
      </ul>
  
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carousel.png" alt="Los Angeles" width="1100" height="500">
      </div>

      <!-- <div class="carousel-item">
        <img src="images/caro.png" alt="Chicago" width="1100" height="500">
      </div>

      <div class="carousel-item">
        <img src="images/caro.png" alt="New York" width="1100" height="500">
      </div> -->


    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev" colo>
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  

  <section class="my-5">
    <div class="container">
      <h2 style="color: white; text-align: center;">Search By</h2>

      <div class="card-columns">
        <div class="card ">
            <img class="card-img-top" src="images/antho.png" alt="Card image">
            <div class="card-body text-center">
              <p class="card-text">Anthocerotophyta</p>
              <a href="adminAnthocerotophyta.php" class="btn btn-link">See Profile</a>
</br>
              <?php
              $sql = "SELECT * FROM anthocerotophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
            </div>
          </div>

      <div class="card">
          <img class="card-img-top" src="images/bryo.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Bryophyta</p>
              <a href="adminBryophyta.php" class="btn btn-link">See Profile</a>
            </br>
            <?php
              $sql = "SELECT * FROM bryophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
          </div>
        </div>

      <div class="card">
          <img class="card-img-top" src="images/charo.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Charophyta</p>
              <a href="adminCharophyta.php" class="btn btn-link">See Profile</a>
            </br>
            <?php
              $sql = "SELECT * FROM charophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
          </div>
      </div>

      <div class="card">
          <img class="card-img-top" src="images/chloro.png" alt="Card image">
          <div class="card-body text-center">
            <p class="card-text">Chlorophyta</p>
              <a href="adminChlorophyta.php" class="btn btn-link">See Profile</a>
            </br>
            <?php
              $sql = "SELECT * FROM chlorophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
          </div>
      </div>

      <div class="card">
        <img class="card-img-top" src="images/glauco.png" alt="Card image">
        <div class="card-body text-center">
          <p class="card-text">Glaucophyta</p>
            <a href="adminGlaucophyta.php" class="btn btn-link">See Profile</a>
            </br>
            <?php
              $sql = "SELECT * FROM glaucophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
        </div>
      </div>

      <div class="card">
      <img class="card-img-top" src="images/marchantio.png" alt="Card image">
      <div class="card-body text-center">
        <p class="card-text">Marchantiophyta</p>
        <a href="adminMarchantiophyta.php" class="btn btn-link">See Profile</a>
            </br>
        <?php
              $sql = "SELECT * FROM marchantiophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
      </div>
      </div>

      <div class="card">
      <img class="card-img-top" src="images/rhodo.png" alt="Card image">
      <div class="card-body text-center">
        <p class="card-text">Rhodophyta</p>
        <a href="adminRhodophyta.php" class="btn btn-link">See Profile</a>
            </br>
            <?php
              $sql = "SELECT * FROM rhodophyta";

              if ($result = mysqli_query($con, $sql)) {
              
                 // Return the number of rows in result set
                 $rowcount = mysqli_num_rows( $result );
                 
                 // Display result
                 printf("Total count :  %d\n", $rowcount);
              }
              ?>
      </div>
      </div>
    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>