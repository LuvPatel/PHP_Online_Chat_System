<?php

$conn = mysqli_connect("localhost","root","","chatapp_database");
// $conn =new  mysqli("localhost","root","","chatapp_database");
if(!$conn){
	die("connection failed".mysqli_connect_error());
	// die("connection failed".mysqli_error());
}
?>