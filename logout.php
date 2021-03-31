<?php

	session_start();
	$_SESSION['logout'] = "You Have successfully Logged Out";

	header("Location:index.php");	

?>