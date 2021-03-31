<?php
session_start();
include 'dbh.php';
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['password'];


$sql = "select * from signup where username='$uname'";
$result = $conn->query($sql);
if($row = $result->fetch_assoc())
{
	$_SESSION['sameuname'] = "username already exist";
	header("Location:error.php");
}
else
{
	$sql = "select * from signup where email='$email'";
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc())
	{
		$_SESSION['sameemail'] = "email already exist";
		header("Location:error.php");
	}
	else
	{
		$sql="insert into signup(username,email,password) VALUES('$uname','$email','$pass')";
		$result=$conn->query($sql);
	
		$_SESSION['msg'] = "You have been Successfully SignUp....";
		header("Location:index.php");
		exit();
	}
}


?>