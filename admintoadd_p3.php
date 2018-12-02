<html>
<head><title>admin</title>
</head>
<body>

<?php

session_start();

$conn=new mysqli("localhost","root","Ransom@006","portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST["addStudent"]){
        $a=$_POST["addRegNo"];
        $b=$_POST["addName"];
        $c=$_POST["addPhoneNo"];
        $sql="insert into student (regNo,name,phoneNo,isStaff,isAdmin) values('$a','$b','$c',0,0);";
        $result=$conn->query($sql);
}
else if($_POST["addStaff"]){
        $a=$_POST["addStaffId"];
        $b=$_POST["addName"];
        $c=$_POST["addPhoneNo"];
        $sql="insert into staff (staffId,name,phoneNo,isStaff,isAdmin) values('$a','$b','$c',1,0);";
        $result=$conn->query($sql);
}
else if($_POST["addSubject"]){
        $a=$_POST["addCourseId"];
        $b=$_POST["addCourseName"];
        $sql="insert into course (courseId,courseName) values('$a','$b');";
        $result=$conn->query($sql);
}
/*
if($result)
        header('Location:staff_h.php');
else
        echo "Re-enter properly";
*/

else if($_POST["deleteStudent"]){
        $a=$_POST["deleteRegNo"];
        $sql="delete from student where regNo='$a';";
        $result=$conn->query($sql);
}
else if($_POST["deleteStaff"]){ 
        $a=$_POST["deleteStaffId"];
        $sql="delete from staff where StaffId='$a';";
        $result=$conn->query($sql);
}
else if($_POST["deleteSubject"]){ 
        $a=$_POST["deleteCourseId"];
        $sql="delete from course where courseId='$a';";
        $result=$conn->query($sql);
}
else if($_POST["showStudent"]){ 
        $sql="select * from student where 1;";
        $result=$conn->query($sql);
        $i=0;
        while($row=$result->fetch_assoc()){
                $_SESSION["sturegNo"][$i]=$row["regNo"];
                $_SESSION["stuname"][$i]=$row["name"];
                $_SESSION["stuphoneNo"][$i]=$row["phoneNo"];
                $_SESSION["stuemail"][$i]=$row["email"];
                $i=$i+1;
        }
}
else if($_POST["showStaff"]){ 
        $sql="select * from staff where 1;";
        $result=$conn->query($sql);
        $i=0;
        while($row=$result->fetch_assoc()){ 
                $_SESSION["staffstaffId"][$i]=$row["staffId"];
                $_SESSION["staffname"][$i]=$row["name"];
                $_SESSION["staffphoneNo"][$i]=$row["phoneNo"];
                $_SESSION["staffemail"][$i]=$row["email"];
                $i=$i+1;
        }
}
else if($_POST["showSubject"]){ 
        $sql="select * from course where 1;";
        $result=$conn->query($sql);
        $i=0;
        while($row=$result->fetch_assoc()){ 
                $_SESSION["courseId"][$i]=$row["courseId"];
                $_SESSION["courseName"][$i]=$row["courseName"];
                $i=$i+1;
        }
}




header("location:subject.php");
?>

</body>
</html>


