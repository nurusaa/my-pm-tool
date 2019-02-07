<?php

//server info
$host = "localhost";
$username = "root";
$password = "";
$database = "mypm";

//connect to database
$conn = mysqli_connect($host,$username,$password,$database);

if (!$conn){
	echo "ERROR CONNECTING TO DATABASES";
}
?>