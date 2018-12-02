<html>
<head>
<title>adminUI</title>
</head>
<body>

<?php session_start(); ?>

<form method="post" action="admintoadd_p1.php">
	<input type="text" name="addRegNo" placeholder="addRegNo" /><br />
	<input type="text" name="addName" placeholder="addName" /><br />
	<input type="text" name="addPhoneNo" placeholder="addPhoneNo" /><br />
	<input type="submit" name="addStudent" value="addStudent" /><br /><br />

	<input type="text" name="deleteRegNo" placeholder="deleteRegNo" /><br />
	<input type="submit" name="deleteStudent" value="deleteStudent" /><br /><br />

	<input type="submit" name="showStudent" value="showStudent" /><br />
</form>
<form method="post" action="admintoadd_p1.php">

	<br />-----------------------------------------------------------<br />
	<input type="text" name="addStaffId" placeholder="addStaffId" /><br />
        <input type="text" name="addName" placeholder="addName" /><br />
        <input type="text" name="addPhoneNo" placeholder="addPhoneNo" /><br />
       	<input type="submit" name="addStaff" value="addStaff" /><br /><br />

        <input type="text" name="deleteStaffId" placeholder="deleteStaffId" /><br />
        <input type="submit" name="deleteStaff" value="deleteStaff" /><br /><br />

        <input type="submit" name="showStaff" value="showStaff" /><br />
</form>
<form method="post" action="admintoadd_p1.php">

	<br />-----------------------------------------------------------<br />
	<input type="text" name="addCourseId" placeholder="addCourseId"/><br />
	<input type="text" name="addCourseName" placeholder="addCourseName" /><br />
	<input type="submit" name="addSubject" value="addSubject" /><br /><br />

        <input type="text" name="deleteCourseId" placeholder="deleteCourseId" /><br />
        <input type="submit" name="deleteSubject" value="deleteSubject" /><br /><br />

        <input type="submit" name="showSubject" value="showSubject" /><br />

</form>

--------------------------------------------------------------------------<br />
<?php if(isset($_SESSION["sturegNo"])){?>
<table border=1px solid black>
	<tr><th>regNo</th><th>name</th><th>phoneNo</th><th>email</th></tr>
	<tr>
		<?php $i=0; 
		foreach($_SESSION["sturegNo"] as $qqq){?>
			<td><?php echo $_SESSION["sturegNo"][$i]; ?></td>
			<td><?php echo $_SESSION["stuname"][$i]; ?></td>
			<td><?php echo $_SESSION["stuphoneNo"][$i]; ?></td>
			<td><?php echo $_SESSION["stuemail"][$i]; ?></td></tr>
			<?php $i=$i+1;
		} ?>

</table>
<?php } ?>

<?php if(isset($_SESSION["staffstaffId"])){?>
<table border=1px solid black>
        <tr><th>staffId</th><th>name</th><th>phoneNo</th><th>email</th></tr>
        <tr>
                <?php $i=0; 
                foreach($_SESSION["staffstaffId"] as $qqq){?>
                        <td><?php echo $_SESSION["staffstaffId"][$i]; ?></td>
                        <td><?php echo $_SESSION["staffname"][$i]; ?></td>
                        <td><?php echo $_SESSION["staffphoneNo"][$i]; ?></td>
                        <td><?php echo $_SESSION["staffemail"][$i]; ?></td></tr>
                        <?php $i=$i+1;
                } ?>

</table>
<?php } ?>

<?php if(isset($_SESSION["courseId"])){?>
<table border=1px solid black>
        <tr><th>courseId</th><th>courseName</th>
        <tr>
                <?php $i=0; 
                foreach($_SESSION["courseId"] as $qqq){?>
                        <td><?php echo $_SESSION["courseId"][$i]; ?></td>
                        <td><?php echo $_SESSION["courseName"][$i]; ?></td></tr>
                        <?php $i=$i+1;
                } ?>
        
</table>
<?php } ?>
<?php session_destroy(); ?>

</body>
</html>
