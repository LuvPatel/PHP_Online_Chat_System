<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container1">
	<div class="container">
		<div class="center">
			<?php
	
				if (!empty($_SESSION['msg'])){
					echo $_SESSION['msg'];

				}
				unset($_SESSION['msg']);
				if (!empty($_SESSION['logout'])){
					echo $_SESSION['logout'];

				}
				unset($_SESSION['logout']);
				

			?>
			<form action="login.php" method="POST">
				<h1>Welcome To Let's Talk</h1>
				<div class="textfield">
					<label>Username: </label>
					<input type="text" name="uname" placeholder="Username" autocomplete="off" required>
					<br>
					<label>Password: </label>
					<input type="password" name="pass" placeholder="Password" autocomplete="off" required>
					<br>
					<br>
					<div class="login_button">
						<input type="submit" name="login" value="LOGIN">
					</div>
				</div>
				<h4>Dont have an account?<a href="register.php">Click Here</a></h4>
			</form>
			<!-- <form action="signup.php" method="POST">
				<h3><br>Don't have account? Register<br></h3>
				<div class="textfield">
					<label>USERNAME : </label>
					<input type="text" name="uname" required>
					<br>
					<label> EMAIL :   </label>
					<input type="text" name="email" required>
					<br>
					<label>PASSWORD : </label>
					<input type="text" name="password" required>
					<br>
					<br>
					<div class="signup_button">
						<input type="submit" name="signup" value="SIGNUP">
					</div>
					<br><br>
				</div>
			</form> -->
		</div>
	</div>
</div>
</body>
</html>