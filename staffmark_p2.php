<?php
        session_start();
        $conn=new mysqli("localhost","root","Ransom@006","portal");

        if($conn->connect_error){
                die("Connection failed:" .$conn->connect_error);
        }

	if(isset($_POST)==true && empty($_POST)==false){
		if(isset($_POST["subject"])){
                       $_SESSION["ssub"]=$_POST["subject"];
                }
                if(isset($_POST["section"])){
                        $_SESSION["ssec"]=$_POST["section"];
                }
                if(isset($_POST["category"])){
                        $_SESSION["scat"]=$_POST["category"];
                }

	        $sql="select regNo from mark where courseId='".$_SESSION['ssub']."' and section='".$_SESSION['ssec']."';";
        	$result=$conn->query($sql);

	        $i=0;
        	while($row = $result->fetch_assoc()){
                	$_SESSION["regNo"][$i]=$row["regNo"];
        	        $i=$i+1;
        	}
	}

	header("location:sentermarks.php");
?>
