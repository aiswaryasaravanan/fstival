<html>
<head>
     <script>
        
     </script>

</head>
<body>
<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal");

	if($conn->connect_error){
		die("connection Error".$conn->connect_error);
	}

	
	if(isset($_POST)==true && empty($_POST)==false){
		for($k=0;$k<=10;$k++){
			if(isset($_POST[$k])){
	
	$sql="select cat1,assignment1,cat2,assignment2,cat3,assignment3 from mark where regNo='".$_SESSION['regNo']."' and courseId='".$_SESSION['sub'][$k]."';";
	$result = $conn->query($sql);
	if($row=$result->fetch_assoc()){
		$_SESSION["cat1"]=$row['cat1'];
		$_SESSION["assignment1"]=$row['assignment1'];
		$_SESSION["cat2"]=$row['cat2'];
                $_SESSION["assignment2"]=$row['assignment2'];
                $_SESSION["cat3"]=$row['cat3'];
                $_SESSION["assignment3"]=$row['assignment3'];
		$_SESSION["set"]="1";
	}
	break;
}
}
}
header('Location:getsubjectformark_he.php');
?>
</body>
</html>
