<?php
include('Connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>

<body style="background-color: #425F57">



<nav class="navbar navbar-inverse visible-xs ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Logo</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="Homepage.php">Homepage</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Total Entries</h4>
  </br>
  <?php
              $sql = "SELECT * FROM rhodophyta";
              if ($result = mysqli_query($con, $sql)) {
                 $rowcount = mysqli_num_rows( $result );
              }

              $sql1 = "SELECT * FROM marchantiophyta";
              if ($result1 = mysqli_query($con, $sql1)) {
              $rowcount1 = mysqli_num_rows( $result1 );}

              $sql2 = "SELECT * FROM anthocerotophyta";
              if ($result2 = mysqli_query($con, $sql2)) {
              $rowcount2 = mysqli_num_rows( $result2 );}

              $sql3 = "SELECT * FROM glaucophyta";
              if ($result3 = mysqli_query($con, $sql3)) {
              $rowcount3 = mysqli_num_rows( $result3 );}

              $sql4 = "SELECT * FROM chlorophyta";
              if ($result4 = mysqli_query($con, $sql4)) {
              $rowcount4 = mysqli_num_rows( $result4 );}

              $sql5 = "SELECT * FROM charophyta";
              if ($result5 = mysqli_query($con, $sql5)) {
              $rowcount5 = mysqli_num_rows( $result5 );}

              $sql6 = "SELECT * FROM bryophyta";
              if ($result6 = mysqli_query($con, $sql6)) {
              $rowcount6 = mysqli_num_rows( $result6 );}
              
              printf("Total count :  %d\n", $rowcount+$rowcount2+$rowcount3+$rowcount4+$rowcount5+$rowcount6);
              ?>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <?php 
                    $sql7 = "SELECT * FROM users";
                    if ($result7 = mysqli_query($con, $sql7)) {
                       $rowcount7 = mysqli_num_rows( $result7 );
                       printf("Total Users Registered :  %d\n", $rowcount7);
                    }
            ?>
            <br> 
            <br>       
          </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Archieves</h4>
            <?php 
                    $sql8 = "SELECT * FROM archieves";
                    if ($result8 = mysqli_query($con, $sql8)) {
                       $rowcount8 = mysqli_num_rows( $result8 );
                       printf("Total:  %d\n", $rowcount8);
                      }
              ?> 
            </br>
            <form class= "d-flex" method = "POST">
            <button type="submit" name= "view"class="btn btn-link">See Profile</button>
                    </form>      
          </div>
        </div>
        <div class = "container my-5">
          <table class = "table" style="color:white;">

          <?php
        
          if(isset($_POST['view'])){
            $sth =
              "SELECT *FROM `archieves`  ";
            $searchResult = mysqli_query($con,$sth);
            if(mysqli_num_rows($searchResult)>0){
              echo '<thead> 
              <tr>
              <th> Name </th>
              <th>Phylum</th>
              <th>Family</th>
              <th>TimeStamp</th>
              </tr>
              </th>';
                while($row = mysqli_fetch_assoc($searchResult)){
                echo '<tbody>
                <tr>
                <td>'.$row['name'].'</td>
                <td>'.$row['phylum'].'</td>
                <td>'.$row['family'].'</td>
                <td>'.$row['timestamp'].'</td>
        
                
                </tr>
                </tbody>';}
              }
              else{
                echo '<h2 class=text-danger>
                Data not found
                </h2>';
              }


            }


          ?>
</div>

</body>
</html>
