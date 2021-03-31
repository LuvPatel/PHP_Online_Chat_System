<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<div class="container">
		<div class="center">
			<form action="signup.php" method="POST">

				<h3><br> Register Yourself<br></h3>
				<div class="textfield">
					<label>Username : </label>
					<input type="text" name="uname" required autocomplete="off">
					<br>
					<label> Email   : </label>
					<input type="text" name="email" required autocomplete="off">
					<br>
					<label>Password : </label>
					<input type="text" name="password" required autocomplete="off">
					<br>
					<br>
					<div class="signup_button">
						<input type="submit" name="signup" value="SIGNUP">
					</div>
					<h4>Already Have An Account?<a href="index.php">Sign In Here</a></h4>
					<br><br>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
