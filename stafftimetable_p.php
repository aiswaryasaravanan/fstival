
<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$conn = new mysqli("localhost", "root", "ransom7", "portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$staffId=$_POST["staffId"];
$_SESSION["staffId"]=$staffId;
$i=0;
$sql = "SELECT * FROM timetable where staffId='$staffId';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
             
               $_SESSION["day"][$i]=$row["day"];
            	$_SESSION["p1"][$i]=$row["p1"];

		$_SESSION["p2"][$i]=$row["p2"];
		$_SESSION["p3"][$i]=$row["p3"];
		$_SESSION["p4"][$i]=$row["p4"];

		$_SESSION["p5"][$i]=$row["p5"];
                $_SESSION["p6"][$i]=$row["p6"];

		$i++; 
 }
} 
else
{
echo "yet to upload";
}
header('location:timetable.php');
?>
</body>
</html>

