<?php
	session_start();
	$conn=new mysqli("localhost","root","Ransom@006","portal1");

	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}

	session_start();
	$reg=$_POST["regNo"];
	$_SESSION['regNo']=$reg;

	/*$folder="/serverimages/";*/	
	$imgname=$_FILES["uploadedimg"]["name"];

	move_uploaded_file($_FILES["uploadedimg"]["tmp_name"],$_FILES["uploadedimg"]["name"]);

	$sql="insert into assignment (regNo,fileName,path) values ('$reg','$imgname','nn')";
	$result=$conn->query($sql);

	$sqll="select fileName,path from assignment where regNo='$reg';";
	$res=$conn->query($sqll);

	while($row=$res->fetch_assoc()){
		$rimgname=$row["fileName"];
		$rfolder=$row["path"];
	}
$_SESSION["a"]=$rimgname;
$_SESSION["b"]=$rfolder;
	$_SESSION["im"]="1";
	header('location:assignment_h.php');
?>
