<html>
<head><title>logoContest</title></head>
<body>
<?php

	$conn=new mysqli("localhost","root","Ransom@006","portal1");

	if($conn->connect_error){
		die("Connection failed:" .$conn->connect_error);
	}

	$sqll="select logo from logogame where sNo=1;";
	$res=$conn->query($sqll);
	if($res){
		$row=$res->fetch_assoc();
		header("content-type: image/jpg");
		$img=$row['logo'];
		 echo $img;
	}

	header('Location:logo_h.php');
?>
</body>
</html>
