
<html>
<head>
</head>
<body>

<?php

$conn=new mysqli("localhost","root","Ransom@006","portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$staffid=$_POST["staffId"];
$name=$_POST["name"];
$phoneno=$_POST["phoneNo"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql="update staff set email='$email',password='$password',isStaff=1,isAdmin=0 where staffId='$staffId' AND name='$name' AND phoneNo='$phoneno'";
$result=$conn->query($sql);

header('Location:slaunch.php');

?>

</body>
</html>


