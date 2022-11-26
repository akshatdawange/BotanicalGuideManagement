<?php

include_once('Connection.php');
$query = "SELECT * FROM bryophyta";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <img src="images/logo.png" width="40" height="40">
      <a class="navbar-brand" href="userHomepage.php">GardenByte</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="userHomepage.php">Home</a>
          </li>
        </ul>
        
        <form class="d-flex" method = "POST">
          <input name = "search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button name = "submit" class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class = "container my-5">
          <table class = "table">

          <?php
        
          if(isset($_POST['submit'])){
            $str = $_POST['search'];
            $sth =
              "SELECT *FROM `bryophyta` WHERE scientificName like '%$str%'  ";
            $searchResult = mysqli_query($con,$sth);
            if(mysqli_num_rows($searchResult)>0){
              echo '<thead> 
              <tr>
              <th> Name </th>
              <th>Family</th>
              <th>Order</th>
              <th>Species</th>
              <th>Genus</th>
              </tr>
              </th>';
                while($row = mysqli_fetch_assoc($searchResult)){
                echo '<tbody>
                <tr>
                <td>'.$row['scientificName'].'</td>
                <td>'.$row['family'].'</td>
                <td>'.$row['order'].'</td>
                <td>'.$row['species'].'</td>
                <td>'.$row['genus'].'</td>
                
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
          </table>
        </div>

  <div class="container">
      <br>  
      <div class="jumbotron p-5 text-white jumbotron-fluid" style="background-image: linear-gradient(to top, #425f57, #477667, #4c8d76, #53a584, #5cbd90); border-radius: 15px">
  <div class="containerJumbo">
    <h3 class="display-7">About Bryophyta</h3>
    <p class="lead">The Bryophyta s.l. are a proposed taxonomic division containing three groups of non-vascular land plants: the liverworts, hornworts and mosses.
      <br><h5>Suitable Habitat:</h5> Damp, shady environments, but they can also be found in diverse and even extreme habitats, from deserts to arctic areas.
      <br>
      <br><h5>Found in:</h5> In Himalayas, Northeast and Peninsular India and in Andaman & Nicobar Islands.
  </div>  
</div>   
      <table class="table table-borderless">
        <thead>
          <tr>
          <th>
        <label for="sort">Name</label>

      </th>
        <th>
        <label for="sort">Family</label>

    </th>
        <th><label for="sort">Order</label>

</th>
        <th><label for="sort">Species</label>

</th>
        <th><label for="sort">Genus</label>

</th>
          </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM bryophyta";
        $result = mysqli_query($con, $sql);
        $num=mysqli_num_rows($result);
        $numberPages=40;
        $totalPages=ceil($num/$numberPages);

        for($btn=1;$btn<=$totalPages;$btn++)
        {
          echo'<button class="btn btn-dark mx-1 my-3"><a href="userBryo.php?page='.$btn.'">'.$btn.'</a></button>';
        }
        if(isset($_GET['page'])){
          $page=$_GET['page'];
        }
        else
        {
          $page=1;
        }
        $startingLimit=($page-1)*$numberPages;
        $sql = "SELECT * FROM bryophyta LIMIT ".$startingLimit.','.$numberPages;
        $result=mysqli_query($con,$sql);

        while($rows=mysqli_fetch_assoc($result))
            {
              $name = $rows['scientificName'];
              $family = $rows['family'];
              $order = $rows['order'];
              $species = $rows['species'];
              $genus = $rows['genus'];
              $id = $rows['speciesKey'];
              
              echo'<tr>
              <td> '.$name.'</td>
              <td>'.$family.' </td>
              <td>'.$order.' </td>
              <td>'.$species. '</td>
              <td>'.$genus.' </td>
              </td>
            </tr>';
            }
        ?>
      </table>
  </div>

</body>
</html>