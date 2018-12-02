<!doctype html>
<html lang="en">
  <head>
	  <title>ZaaZ</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	  <link rel="stylesheet" href="sreports.css">
	<link rel="stylesheet" href="smark.css">
	
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <style>
	  .nav-pills > li >a
	   {
		   color:purple;
	   }
	.nav-pills > li.active > a
	{
    background-color:rgba(128,0,128,0.7) ;
    }
	.nav-pills > li.active > a:hover
	{
    background-color:rgba(128,0,128,0.8);
    }
	  </style>
  </head>

  
  <body >
  
   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
   
     <div class="rows">
	  
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(128,0,128,0.8);color:white;height:80px;padding-left:20px;padding-top:20px;margin:2px">
		       <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out" ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
	 </div>	
	    <div class="col-lg-3 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" background-color:rgba(128,0,128,0.1);color:white;min-height:550px;padding-left:15px;padding-top:20px;margin:2px">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:250px">
                        <div class="navbar-header">
						
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:4px 4px 6px black;color:white">STAFF PORTAL</a>
                         </div>
                          	<br/><br/>
                            <hr/>							
						   <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li ><a href="shome.php">Profile</a></li>
                                <li ><a href="sattendance.php">Attendance</a></li>
								
								<li><a href="stimetablenew.php">Time Table</a></li>
                                <li ><a href="sentermarks.php">Marks</a></li>	
                                <li class="active"><a href="sreports.php">Reports</a></li>
								<li><a href="scalender.php">Calender</a></li>
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
		
	    <div class="col-lg-9 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style="color:white;min-height:550px;padding-left:20px;padding-top:20px;margin:2px">
		        <div class ="wrapper">

<?php
session_start();
 $conn=new mysqli("localhost","root","Ransom@006","portal");

        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
$_SESSION["staffId"]="cs001";
 $staffid=$_SESSION["staffId"];
        $i=0;
        $sql="select courseId,section from staffCourse where staffId='$staffid';";

        $result=$conn->query($sql);
        while($row=$result->fetch_assoc()){
                $_SESSION["courseId"][$i]=$row["courseId"];
                $_SESSION["section"][$i]=$row["section"];
                $i=$i+1;
        }
?>

<table id="t1">
<form action="staffreport_p2.php" method="post">

 <select required class="select" style=" min-width: 200px;" name="subject" >
        <?php $q=0;
        if(isset($_SESSION["courseId"])){ ?>
                <option class="o1" value="-" disabled selected>-</option>
                <?php foreach($_SESSION["courseId"] as $qqq){ ?>
                        <option class="o1" value=<?php echo $_SESSION["courseId"][$q]; ?> ><?php echo $_SESSION["courseId"][$q]; ?> </option>

                        <?php $q=$q+1;
                        echo "<br />";
                }

         } ?>
   </select>

<select required class="select" style="width: 100px;" name="section">
        <?php $q=0;
        if(isset($_SESSION["section"])){ ?>
                        <option class="o1" disabled selected style="width: 100px;" value="-">-</option>
                        <?php foreach($_SESSION["section"] as $qqq){ ?>
                                <option class="o1" style=" width: 100px;" value=<?php echo $_SESSION["section"][$q]; ?>><?php echo $_SESSION["section"][$q]; ?></option>
                                <?php $q=$q+1;
                                echo "<br />";
                        }
        } ?>
   </select>

<select  required class="select" style=" min-width:200px;" name="category">
        <?php $q=0;
        if(isset($_SESSION["courseId"])){ ?>
                        <option  class="o1"value="-" disabled selected style=" min-width:200px;">-</option>
                        <option  class="o1"value="cat1">Cat1</option>
                        <option  class="o1"value="assignment1">Assignment1</option>
                        <option  class="o1"value="cat2">Cat2</option>
                        <option  class="o1"value="assignmment2">Assignment2</option>
                        <option  class="o1"value="cat3">Cat3</option>
                        <option  class="o1"value="assignment3">Assignment3</option>
                        <option  class="o1"value="terminal">Terminal</option>


                        <?php $q=$q+1;
                        echo "<br />";
        } ?>
   </select>
 <input class="s1" type="submit" name="submit" value="SUBMIT"/>


</form>

     
                   

<?php if(isset($_SESSION["regNor"])){   ?>
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


			    
            </div>

		    </div>
	    </div>	  	
	

  </body>
</html>
