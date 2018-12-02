<html>
<head>
</head>
<body>
<?php

echo "hai";
$name = $email = $phoneno = $password = $regno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = ttt($_POST["name"]);
  $regno = ttt($_POST["regno"]);
  $email = ttt($_POST["email"]);
  $password =ttt($_POST["password"]);
  $phoneno = ttt($_POST["phoneno"]);
}

echo $email;

function ttt($data) {
$data = trim($data);
$data = htmlspecialchars($data);
return $data;
}

        $conn=new mysqli("localhost","root","Ransom@006","portal1");
	if($conn->connect_error){
		die("Connection failed: ". $conn->connect_error);
	}

        $sql="select * from customer;";
        $result=$conn->query($sql);

	while($row = $result->fetch_assoc())
        	echo $row["id"] . " " .$row["surname"] . " " . $row["forename"];
		echo "<br>";
        }


?>
</body>
</html>
