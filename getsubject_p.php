<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal");

	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}


	$reg=$_SESSION['regNo'];
	$sql="select courseId from attendance where regNo='$reg';";
	$result=$conn->query($sql);

	$i=0;
	while($row = $result->fetch_assoc()){
		$_SESSION["sub"][$i]=$row["courseId"];
		$i=$i+1;
	}
	$_SESSION["countSubject"]=$i;
	$_SESSION["ssa"]="1";
/*
	$sqll="select avg((daysPresent/noOfDays))*100 as ov from attendance where courseId in (select courseId from attendance where regNo='$reg');";
	$res=$conn->query($sqll);
	if($res){
		$row=$res->fetch_assoc();
		$_SESSION["overall"]=$row["ov"];
	}*/

	header('Location:attendence.php');
?>
