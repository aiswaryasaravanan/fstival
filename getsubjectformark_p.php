<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal");

	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}

	$reg=$_SESSION['regNo'];
	$sql="select mark.courseId,course.courseName from mark,course where mark.regNo='$reg' and mark.courseId=course.courseId;";
	/*$sql="select courseId from mark where regNo='$reg'";*/
	$result=$conn->query($sql);

	$i=0;
	while($row = $result->fetch_assoc()){
		$_SESSION["sub"][$i]=$row["courseId"];
		$_SESSION["courseName"][$i]=$row["courseName"];
		$i=$i+1;
	}
	$_SESSION["countSubject"]=$i;

	header('Location:getsubjectformark_he.php');
?>
