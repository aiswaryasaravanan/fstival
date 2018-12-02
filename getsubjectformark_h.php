
<html>
    <head>
        <title>dummy</title>
	<style>
	table,tr{
		border:1px solid gray;
		width:50%;
		margin-left:auto;
		margin-right:auto;
		min-height:250px;
	}
	</style>
    </head>
    <body>
	<?php session_start(); ?>
    <form action="getsubjectformark_p.php" method="post">
	    regno:<br>
	    <input type="text" name="regNo"><br>
	    <input type="submit" value="get my subject">
    </form>

	<form class="form1" method="post" action="getmark_p.php"><table><tr><td>
        <?php

		if(isset($_SESSION["sub"])){
			$j=0;
			foreach($_SESSION["sub"] as $var){	?>
				<input type="submit" name=<?php echo $j; ?> value=<?php echo $_SESSION["sub"][$j];?> />
				<?php 
				echo "<br />";
				$j=$j+1;
			}
		}
	?>
	</td></tr></table></form>

	<form><table><tr>
		<td><label>cat1:</label><br /></td>
		<td><label> <?php echo $_SESSION['cat1'];?></label><br /></td></tr><tr>
		<td><label>assignment1:</label><br /></td>
		<td><label> <?php echo $_SESSION['assignment1'];?></label><br /></td></tr><tr>
		<td><label>cat2:</label><br /></td>
		<td><label> <?php echo $_SESSION['cat2'];?></label><br /></td></tr><tr>
		<td><label>Assignment2:</label><br /></td>
		<td><label> <?php echo $_SESSION['assignment2'];?></label><br /></td></tr><tr>
		<td><label>cat3:</label><br /></td>
		<td><label> <?php echo $_SESSION['cat3'];?></label><br /></td></tr><tr>
		<td><label>Assignment3:</label><br /></td>
		<td><label> <?php echo $_SESSION['assignment3'];?></label><br /></td></tr><tr>
		
	</td></tr></table>
	</form>

    </body>
</html>
