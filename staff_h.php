<html>
<head>
	<title>staffui</title>
</head>
<body>
	<?php session_start(); ?>
	<form method="post" action="getsubjectstaff_p.php">
		<input type="text" name="staffId" placeholder="Enter your staffId" />
		<input type="submit">
	</form>

	<form method="post" action="getstudentlistforattendance_p.php">
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

	<form method="post" action="checkttforattendance_p.php">
		Enter date:<input type="date" name="date" />
		<br />
		Enter period:
		<select>
			<option value="1" name="p1">1</option>
                        <option value="2" name="p2">2</option>
                        <option value="3" name="p3">3</option>
                        <option value="4" name="p4">4</option>
                        <option value="5" name="p5">5</option>
                        <option value="6" name="p6">6</option>

		</select>
		<br />
		<input type="submit" value="proceed" />
	</form>
	<form>
		<?php
			if(isset($_SESSION["student"])){
				$s=0;
				foreach($_SESSION["student"] as $ss){	?>
					<label><?php echo $_SESSION["student"][$s]; ?></label>
					<input type="submit" name=<?php echo $s; ?> value="absent"/>
					<?php echo "<br />";
					$s=$s+1;
				}
			}
		?>
	</form>
</body>
</html>
