<?php

//costants to be used throughout the script
$servername = "localhost";
$username = "root";
$password = "ghh";


//connect to database
$link = mysqli_connect($servername, $username, $password);

if(!$link){
	die('could not connect: ' . mysqli_connect_error());
}

//select database
mysqli_select_db($link,"demo");
echo 'Connected successfully';


?>