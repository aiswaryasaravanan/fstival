
<html>
</head>
<head><title>login</title>
<body>
<?php
    
    $conn=new mysqli("localhost","root","Ransom@006","portal");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    session_start();
    $regno=$_POST["regNo"];
    $password=$_POST["password"];

    $sql="select regNo,name,phoneNo,email from student where regNo='$regno' and password='$password';";
    $result=$conn->query($sql);
    if($res=$result->fetch_assoc()){
        $_SESSION["regNo"]=$res["regNo"];
        $_SESSION["name"]=$res["name"];
        $_SESSION["phoneNo"]=$res["phoneNo"];
        $_SESSION["email"]=$res["email"];
        header('Location:home.php');
    }
    else{
        session_destroy();
        header('Location:launch.html');
    }
?>
</body>
</html>
