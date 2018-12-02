<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal");

	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}

	if(isset($_POST)==true and empty($_POST)==false){
		for($k=0;$k<=8;$k++){
			if(isset($_POST[$k])){
				$qq=$_SESSION["staffsub"][$k];
				$qqq=$_SESSION["staffsec"][$k];
				$sql="select regNo from mark where courseId='$qq' and section='$qqq';";
				$result=$conn->query($sql);
				$i=0;
				while($row = $result->fetch_assoc()){
					$_SESSION["student"][$i]=$row["regNo"];
					$i=$i+1;
				}
				$_SESSION["countStudent"]=$i;
				break;
			}
		}
	}
	header('Location:sattendance.php');
?>
