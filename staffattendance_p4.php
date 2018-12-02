<?php
        session_start();
        $conn=new mysqli("localhost","root","Ransom@006","portal");

        if($conn->connect_error){
                die("Connection failed:" .$conn->connect_error);
        }

        if(isset($_POST)==true and empty($_POST)==false){
                for($k=0;$k<=10;$k++){
                        if(isset($_POST["pre".$k])){
                                $qq=$_SESSION["student"][$k];
                                $sql="update attendance set daysPresent=daysPresent+1,noOfDays=noOfDays+1 where regNo='$qq';";
                                $result=$conn->query($sql);
                        }
			else if(isset($_POST["abs".$k])){
                                $qq=$_SESSION["student"][$k];
                                $sql="update attendance set noOfDays=noOfDays+1 where regNo='$qq';";
                                $result=$conn->query($sql);
                        }
                }
        }
        header('Location:sattendance.php');
?>



