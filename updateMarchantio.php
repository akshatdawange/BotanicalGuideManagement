<?php
include 'Connection.php';
$id = $_GET['updateid'];
$auto = "SELECT * FROM `marchantiophyta` WHERE speciesKey = $id";
$fill = mysqli_query($con,$auto);
$rows=mysqli_fetch_assoc($fill);

$name = $rows['scientificName'];
$family = $rows['family'];
$order = $rows['order'];
$species = $rows['species'];
$genus = $rows['genus'];

if(isset($_POST['update'])){
    // $name1 = $_POST['scientificName'];
    $family1 = $_POST['family'];
    $species1 = $_POST['species'];
    $genus1 = $_POST['genus'];
    

    try{$sql = "UPDATE `marchantiophyta` SET speciesKey = $id,family = '$family1',species = '$species1',genus = '$genus1' WHERE speciesKey = $id ";
        $result = mysqli_query($con,$sql);}
    catch(mysqli_sql_exception $e) { 
            var_dump($e);
            exit; 

    }
    if($result){
        header('location: adminMarchantiophyta.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

        <!-- <li class="nav-item">
            <a class="nav-link" href="userinfo.php">Login</a>
        </li> -->
        </ul>
        
    </div>
    </div>
</nav>

<body>
<div class="container my-3">
<h2 style ="text-align: center;"> Update Entry </h2>
    </div>
    <div class = "container my-5">
    <div class = "form-login" style = "width: 50%; top: 25%; left: 25%; ">
        <form method = "POST">
            <div class="form-group">
                <label style = "color:black">Name</label>
                <input type="text" class = "form-control"
                name = "name" value=<?php echo "$name";?>>
            </div>
            <div class="form-group">
                <label style = "color:black">Family</label>
                <input type="text" class = "form-control"
                name = "family" value=<?php echo "$family";?>>
            </div>
            <div class="form-group">
                <label style = "color:black">Order</label>
                <input type="text" class = "form-control"
                name = "order"value=<?php echo "$order";?>>
            </div>
            <div class="form-group">
                <label style = "color:black">Species</label>
                <input type="text" class = "form-control"
                name = "species"value=<?php echo "$species";?>>
            </div>
            <div class="form-group">
                <label style = "color:black">Genus</label>
                <input type="text" class = "form-control"
                name = "genus"value=<?php echo "$genus";?>>
            </div>
            <button type = "submit" class = "btn btn-success" name = "update">Update</button>

            
        </form>
    </div>
    </div>
</body>