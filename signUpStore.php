<?php
$servername = "localhost";
$username = ;
$password = ;
$dbname = "database";

//Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($connection -> connect_error){
	die("Connection failed:" .$connection->connect_error);
}

$sql = "INSERT INTO Users(username, password, email) 
		VALUES ()";

if($connection->query($sql) === TRUE){
	echo "Welcome to the Corner";
} else {
	echo "Error:" + .$sql. "<br>" . $connection->error;
}

$connection -> close();