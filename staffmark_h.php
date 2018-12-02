

<html>
<head><title>staffmark</title>
</head>
<body>

<?php session_start(); ?>

<form method="post" action="staffmark_p1.php">
	Enter staffId:<input type="text" name="staffId" />
	<input type="submit" name="submit" value="submit" />
</form>

<form method="post" action="staffmark_p2.php">
   <select name="subject">
	<?php $q=0;
	if(isset($_SESSION["courseId"])){ ?>
		<option value="-">-</option>
		<?php foreach($_SESSION["courseId"] as $qqq){ ?>
			<option value=<?php echo $_SESSION["courseId"][$q]; ?> ><?php echo $_SESSION["courseId"][$q]; ?> </option>

			<?php $q=$q+1;
			echo "<br />";
		}

	 } ?>
   </select>
   <select name="section">
        <?php $q=0;
        if(isset($_SESSION["section"])){ ?>
			<option value="-">-</option>
			<?php foreach($_SESSION["section"] as $qqq){ ?>
	                        <option value=<?php echo $_SESSION["section"][$q]; ?>><?php echo $_SESSION["section"][$q]; ?></option>
	                        <?php $q=$q+1;
        	                echo "<br />";
			}
        } ?>
   </select>

   <select name="category">
        <?php $q=0;
        if(isset($_SESSION["courseId"])){ ?>
			<option value="-">-</option>
                        <option value="cat1">Cat1</option>
                        <option value="assignment1">Assignment1</option>
			<option value="cat2">Cat2</option>
                        <option value="assignmment2">Assignment2</option>
                        <option value="cat3">Cat3</option>
                        <option value="assignment3">Assignment3</option>
                        <option value="terminal">Terminal</option>

                        <?php $q=$q+1;
                        echo "<br />";
        } ?>
   </select>

   <input type="submit" name="submit" value="submit" />

</form>

<form method="post" action="staffmark_p3.php">
	<?php if(isset($_SESSION["regNo"])){
		$q=0;
		foreach($_SESSION["regNo"] as $qq){	?>
			<label><?php echo $_SESSION["regNo"][$q]; ?></label>
			<input type="text" name=<?php echo $q; ?> /><br />
			<?php $q=$q+1; 
		} ?>
		<input type="submit" name="submit" value="submit" />
	<?php } ?>
</form>

</body>
</html>
