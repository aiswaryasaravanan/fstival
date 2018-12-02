<html>
<head>
</head>
<body>

<?php

$conn=new mysqli("localhost","root","Ransom@006","portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$regno=$_POST["regNo"];
$name=$_POST["name"];
$phoneno=$_POST["phoneNo"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql="update student set email='$email',password='$password' where regNo='$regno' AND name='$name' AND phoneNo='$phoneno'";
$result=$conn->query($sql);

header('Location:launch.html');

?>

</body>
</html>
