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

		$i=0;
                $sql="select regNo,".$_SESSION['scat']." from mark where courseId='".$_SESSION['ssub']."' and section='".$_SESSION['ssec']."';";

                $result=$conn->query($sql);

		$zz=$_SESSION["scat"];
                while($row = $result->fetch_assoc()){
                        $_SESSION["regNor"][$i]=$row["regNo"];
			$_SESSION["categoryr"][$i]=$row[$zz];;
                        $i=$i+1;
                }
        }
        header("location:sreports.php");
?>

