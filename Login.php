<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'test');

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "INSERT INTO users (f_name,l_name,email,pass)
VALUES ('$f_name', '$l_name', '$email', '$pass')";

mysqli_query($con, $query);

echo "$query";

header('location:userinfo.php');

?>