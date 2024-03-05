<?php

$servername="localhost";
$username = "root";
$password = "";
$mydb ="train_place2"; 

$conn = new mysqli($servername,$username,$password,$mydb);
if(!$conn){
die("cant reach database" .mysqli_connect_error());
} 
?>