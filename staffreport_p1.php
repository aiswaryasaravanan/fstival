
<html>
<head><title>staffreport</title>
</head>
<body>
<?php

        $conn=new mysqli("localhost","root","Ransom@006","portal");

        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }

        session_start();
        $staffid=$_POST["staffId"];
        $_SESSION["staffId"]=$staffid;

        $i=0;

        $sql="select courseId,section from staffCourse where staffId='$staffid';";
        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
                $_SESSION["courseId"][$i]=$row["courseId"];
                $_SESSION["section"][$i]=$row["section"];
                $i=$i+1;
        }

        header("location:staffreport_h.php");
?>
</body>
</html>

