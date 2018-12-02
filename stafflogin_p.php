
<html>
<head><title>zaaz</title>
</head>
<body>

<?php
    
    $conn=new mysqli("localhost","root","Ransom@006","portal");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    session_start();
    $staffid=$_POST["staffId"];
    $password=$_POST["password"];

    $sql="select staffId,name,phoneNo,email from staff where staffId='$staffid' and password='$password';";
    $result=$conn->query($sql);
    if($res=$result->fetch_assoc()){
        $_SESSION["staffId"]=$res["staffId"];
        $_SESSION["name"]=$res["name"];
        $_SESSION["phoneNo"]=$res["phoneNo"];
        $_SESSION["email"]=$res["email"];
        header('Location:shome.php');
    }
    else{
        session_destroy();
        header('Location:slaunch.html');
    }
?>
</body>
</html>
