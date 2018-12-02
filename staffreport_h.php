
<html>
<head><title>staffreport</title>
</head>
<body>
<?php session_start(); ?>

<form method="post" action="staffreport_p1.php">
        Enter staffId:<input type="text" name="staffId" />
        <input type="submit" name="submit" value="submit" />
</form>

<form method="post" action="staffreport_p2.php">
   <select name="subject">
        <?php $q=0;
        if(isset($_SESSION["courseId"])){

                foreach($_SESSION["courseId"] as $qqq){ ?>
                        <option value=<?php echo $_SESSION["courseId"][$q]; ?> ><?php echo $_SESSION["courseId"][$q]; ?> </option>

                        <?php $q=$q+1;
                        echo "<br />";
                }

         } ?>
   </select>

   <select name="section">
        <option value="-">-</option>
        <?php $q=0;
        if(isset($_SESSION["section"])){
		foreach($_SESSION["section"] as $qqq){ ?>
                        <option value=<?php echo $_SESSION["section"][$q]; ?> ><?php echo $_SESSION["section"][$q]; ?></option>
                        <!--<option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>-->
                        <?php $q=$q+1;
                        echo "<br />";
		}
        } ?>
   </select>

   <select name="category">
        <?php $q=0;
        if(isset($_SESSION["courseId"])){ ?>
                        <option value="-">-</option>
                        <option value="cat1">Cat1</option>
                        <option value="assignment1">Assignment1</option>
                        <option value="cat2">Cat2</option>
                        <option value="assignmment2">Assignment2</option>
                        <option value="cat3">Cat3</option>
                        <option value="assignment3">Assignment3</option>
                        <option value="terminal">Terminal</option>

                        <?php $q=$q+1;
                        echo "<br />";
        } ?>
   </select>

   <input type="submit" name="submit" value="submit" />

</form>

<table border=1px solid black>
        <?php if(isset($_SESSION["regNor"])){	?>
                        <tr>
                                <th>RegNo</th>
                                <th><?php echo $_SESSION["scat"]; ?></th>
                        </tr>
                <?php $q=0;
                foreach($_SESSION["regNor"] as $qq){     ?>
                        <tr>
                                <td><label><?php echo $_SESSION["regNor"][$q]; ?></label></td>
                                <td><label><?php echo $_SESSION["categoryr"][$q]; ?></label></td>
                        </tr>
                        <?php $q=$q+1;
                }
        } ?>
</table>	


</body>
</html>

