<?php

//costants to be used throughout the script
$servername = "localhost";
$username = "root";
$password = "";


//connect to database
$link = mysqli_connect($servername, $username, $password);

if(!$link){
	die('could not connect: ' . mysqli_connect_error());
}

//select database
mysqli_select_db($link,"forms");
echo 'Connected successfully';

$value = $_POST['input1'];

$sql = "INSERT INTO demo (input1) VALUES ('$value')";
if (mysqli_query($link, $sql)){
	echo "New record created successfully";
} else {
		die('Error: ' . mysqli_error($link));

}

mysqli_close($link);
?>