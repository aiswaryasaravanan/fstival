<html>
<head>
<title>dum</title>
</head>
<body>
<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal");

	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}


	$reg=$_POST["staffId"];
	$_SESSION['staffId']=$reg;
	$sql="select courseId,section from staffCourse where staffId='$reg';";
	$result=$conn->query($sql);

	$i=0;
	while($row = $result->fetch_assoc()){
		$_SESSION["staffsub"][$i]=$row["courseId"];
		$_SESSION["staffsec"][$i]=$row["section"];
		$i=$i+1;
	}
	//$_SESSION["countSubject"]=$i;

	header('Location:staffattendance_h.php');
?>
</body>
</html>
