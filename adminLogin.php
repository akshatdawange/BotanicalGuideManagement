<?php

include_once('Connection.php');
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Admin Login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body class = "login-page">
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
        </li>
      </ul>
    </div>
  </div>
</nav>
<h2 style="text-align:center; color:#B3FFAE;">Admin Login</h2>

<form action="" method="POST" class = "login" >
  <div class = "container1">
  <div class = "form-login" style = "width: 50%; top: 25%; left: 25%; ">

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Email" name="email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Password" name="pass"required>
  </div>
  <div>
  <button type= "submit" name= "submit" class="btn btn-outline-primary">
        <!-- <a href = "Homepage.php" style="text-decoration: none; color:aliceblue;"> -->
    Login
  <!-- </a>  -->
  </button>

  <?php
        
          if(isset($_POST['submit'])){
              header('location:Homepage.php');
            }
        
?>


        <!-- <button type= "submit"  class="btn btn-outline-primary">
        <a href = "Homepage.php" style="text-decoration: none; color:aliceblue;">
    Sign Up
  </a> 
  </button>  -->
     </div>
  </div>
</form>