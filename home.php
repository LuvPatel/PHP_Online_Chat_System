<?php
	session_start();
	include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
	
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<div id="main">
			<h1 style="background-color: #2470bb;color: #ffffff;"><?php echo $_SESSION['name']?>-online</h1>
			<div class="output">
				<?php  $sql = "SELECT * FROM posts";
				global $conn;
				$result = $conn->query($sql);
				// $result = mysqli->query()
					if($result->num_rows > 0){
						while($row = $result->fetch_assoc()){
							echo "" . $row['name']. " " . ":: " . $row['msg']." -- " .$row["date"]. "<br>";
							echo "<br>";
						}
					}else{
						echo "0 results";
					}
					$conn->close();

				?>
				<!-- <script>
					window.setInterval('Refresh()',5000);
					function Refresh() {

					// window.parent.location = window.parent.location.href;
					window.location.reload();
					}
				</script> -->

			</div>
			<form method="POST" action="send.php">
				
				<textarea name="msg"placeholder="Type Your Message......" class="form-control"></textarea><br>
				<input type="submit"  onClick="Refresh()" value="Send">

			</form>
		<br>
			<form action="logout.php">
				<input type="submit" value="Logout" style="width: 100%;background-color: #2470bb;color: #ffffff;font-size: 20px;">

			</form>
			
	</div>
		









	</div>
</body>
</html>