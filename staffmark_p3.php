<?php
        session_start();
        $conn=new mysqli("localhost","root","Ransom@006","portal");

        if($conn->connect_error){
                die("Connection failed:" .$conn->connect_error);
        }

        if(isset($_POST)==true && empty($_POST)==false){

		$k=0;
			foreach($_SESSION["regNo"] as $z){
				if($_POST[$k]){
					$aa=$_POST[$k];
					$sql="update mark set ".$_SESSION['scat']."='$aa' where regNo='".$_SESSION['regNo'][$k]."' and courseId='".$_SESSION['ssub']."' and section='".$_SESSION['ssec']."';";
	        	        	$result=$conn->query($sql);
					$k=$k+1;
				}
			}

	}
	header("Location:sentermarks.php");
?>
