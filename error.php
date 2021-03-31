<?php
	session_start();
	if(isset($_SESSION['incorrect']))
	{
		echo"
		<table border='3'>
			<tr>
				<td><h1><u>No Registered user Found with This Username And Password.<br>Please Try again or Create An Account.<br><br><br><a href='index.php'>Click Here To Login Again</a></u></h1></td>
			</tr>
		</table>";
	}
	unset($_SESSION['incorrect']);
	if(isset($_SESSION['sameuname']))
	{
		echo"
		<table border='3'>
			<tr>
				<td><h1><u>Username already exist.<br>Please Try again or Create An Account.<br><br><br><a href='register.php'>Click Here To Signup Again</a></u></h1></td>
			</tr>
		</table>";
	}
	unset($_SESSION['sameuname']);
	if(isset($_SESSION['sameemail']))
	{
		echo"
		<table border='3'>
			<tr>
				<td><h1><u>User with this Email already exist.<br>Please Try again or Create An Account.<br><br><br><a href='register.php'>Click Here To register Again</a></u></h1></td>
			</tr>
		</table>";
	}
	unset($_SESSION['sameemail']);
?>