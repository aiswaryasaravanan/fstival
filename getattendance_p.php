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


	if(isset($_POST)==true && empty($_POST)==false){
	   if($_POST["overall"]){
 		 $_SESSION["sa"]="1";
	        $sqll="select avg((daysPresent/noOfDays))*100 as ov from attendance where courseId in (select courseId from attendance where regNo='".$_SESSION['regNo']."';";
       		 $res=$conn->query($sqll);
       		 if($res){
                	$row=$res->fetch_assoc();
			$_SESSION["over"]="1";
                	$_SESSION["percent"]=$row["ov"];
        }


	   }
	   else{	for($k=0;$k<=8;$k++){
			if(isset($_POST[$k])){

	$sql="select daysPresent,noOfDays from attendance where regNo='".$_SESSION['regNo']."' and courseId='".$_SESSION['sub'][$k]."';";
	$result = $conn->query($sql);
	if($row=$result->fetch_assoc()){
		$_SESSION["daysPresent"]=$row['daysPresent'];
		$_SESSION["noOfDays"]=$row['noOfDays'];
		/*unset($_SESSION['over']);*/
		$_SESSION["percent"]= (($_SESSION["daysPresent"]/$_SESSION["noOfDays"])*100);
		$_SESSION["sa"]="1";
	}
	break;
}
}
}
}
header('Location:attendence.php');
?>
</body>
</html>
