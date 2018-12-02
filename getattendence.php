<html>
<head>
</head>
<body>
<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal");

	if($conn->connect_error){
		die("connection Error".$conn->connect_error);
	}

    $reg=$_SESSION["regNo"];
	if(isset($_POST)==true && empty($_POST)==false){
		for($k=0;$k<=8;$k++){
			if(isset($_POST[$k])){

	$sql="select daysPresent,noOfDays from attendance where regNo='$reg' and courseId='".$_SESSION['sub'][$k]."';";
	$result = $conn->query($sql);
	if($row=$result->fetch_assoc()){
		$_SESSION["daysPresent"]=$row['daysPresent'];
		$_SESSION["noOfDays"]=$row['noOfDays'];
		//unset($_SESSION['sub']);
		$_SESSION["sa"]="1";
	}
	break;
}
}
}
header('Location:attendence.php');
?>
</body>
</html>
