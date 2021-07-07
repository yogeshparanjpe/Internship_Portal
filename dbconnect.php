<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "intern_users";
$count = 0;
$conn = mysqli_connect($servername,$username,$password,$database); // establishing connection

if(!$conn){
	die("Sorry we failed  to connect: " . mysqli_connect_error()); // exits program if executed
}

?>
