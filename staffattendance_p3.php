
<html>
<head><title>staffuip</title>
</head>
<body>

<?php
    session_start(); 
    $conn=new mysqli("localhost","root","Ransom@006","portal");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	if(isset($_POST)==true and empty($_POST)==false){
    		$date=$_POST["date"];
    		for($k=1;$k<=6;$k++){
                        if(isset($_POST["p".$k])){
                               $period=$k;
				break;
			}
		}
	}
	$d_a=array();
	$d_a=explode("-",$date);
	$d_n=$d_a[0]."/".$d_a[1]."/".$d_a[2];


    	$sql="select dayofweek('$d_n') as day;";
    	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	if($row['day']==1)
		$day="monday";
	else if($row['day']==2)
		$day="tuesday";
	else if($row['day']==3)
                $day="wednesday";
	else if($row['day']==4)
                $day="thursday";
	else if($row['day']==5)
                $day="friday";
echo $day;

        /*header('Location:staff_h.php');*/

?>
</body>
</html>
