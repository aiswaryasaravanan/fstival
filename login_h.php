<html>
<head>
	<title>login</title>
</head>
<body>
	<?php
		session_start();
	?>
	<form action="login_p.php" method="post">
 	 	<input type="text" name="regno" placeholder="your regno"><br>
	  	<input type="password" name="password" placeholder="your password"><br>
	  	<input type="submit" value="Submit">
	</form>
	
	<?php
		// echo $_SESSION["regno"];
		// // <br>
		//  echo $_SESSION["name"];
		// // <br>
		// echo $_SESSION["phoneno"];
		// // <br>
		// echo $_SESSION["email"];
		//  session_destroy();
		if($_GET["flag"]=="n"){
			echo "Didnt match...";
		}
	?>
</body>
</html>
