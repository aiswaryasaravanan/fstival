<?php
$var="hello"
$conn=new mysqli("localhost","root","Ransom@006","portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["sub"])){
 $reg=$_POST["regno"];
$sql="select course_id from mark_attendance where regno='$reg';";
$result=$conn->query($sql);

while($row = $result->fetch_assoc()){
echo "<br />";
echo $row["course_id"];
}
}

// $page="attendance.html";
// header( "Location: $page?$reg);




?>
<html>
<head>
</head>
<body>
<form action="attendance.php" method="post">
	regno:<br>
	<input type="text" name="regno"><br>	
	<input type="submit" name="sub" value="get my subject">
</form>


</body>
</html>
