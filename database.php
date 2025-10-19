<?php
$hostname= "localhost";
$username= "root";
$password= "";
$database= "eschosys";

$connection = mysqli_connect($hostname,$username,$password,$database);

if (!$connection){
die("Connection not successful" . mysqli_connect_error());

}





