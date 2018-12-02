<html>
<head>
	<title>staffattendance</title>
</head>
<body>
	<?php session_start(); ?>
	<form method="post" action="staffattendance_p1.php">
		<input type="text" name="staffId" placeholder="Enter your staffId" />
		<input type="submit">
	</form>

	<form method="post" action="staffattendance_p2.php">
		<?php
		if(isset($_SESSION["staffsub"])){
			$j=0;
			foreach($_SESSION["staffsub"] as $v){	?>
					<label name=<?php echo $j; ?> ><?php echo $_SESSION["staffsub"][$j]."-".$_SESSION["staffsec"][$j]; ?></label>
					<input type ="submit" name=<?php echo $j; ?> value="give Attendance"/>
					<?php $j=$j+1; 
					echo "<br />";
			}
		} ?>
	</form>

	<form method="post" action="staffattendance_p4.php">
		<?php
			if(isset($_SESSION["student"])){
				$s=0;
				foreach($_SESSION["student"] as $ss){	?>
					<label><?php echo $_SESSION["student"][$s]; ?></label>
					<input type="submit" name=<?php echo "pre".$s; ?> value="present"/>
					<input type="submit" name=<?php echo "abs".$s; ?> value="absent"/>
					<?php echo "<br />";
					$s=$s+1;
				}	?>
				<br /><input type="submit" name="submit" value="submit Assignment" />

			<?php }
		?>
	</form>
</body>
</html>
