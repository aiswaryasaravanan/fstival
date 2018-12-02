<!doctype html>
<html lang="en">
  <head>
	  <title>ZaaZ</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	  <link rel="stylesheet" href="sattendance.css">
	
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
	td
	{
		font-variant:small-caps;
		text-align:center;
		color:orange;
		font-size:20px;
		width:150px;
		
	}
	input.s1[type=submit]
	{
		
		color:navy;
		font-size:20px;
		padding:5px;
		font-variant:small-caps;
		border-radius:5px;
		-webkit-box-shadow:5px 5px 5px 5px rgba(0, 0, 0, 0.3);
		background-color:white;
		margin-left:340px;
		
	}
	input.s1[type=submit]:hover{background-color:rgba(128,0,128,0.5);color:white;}
	#t1
    {
		border-collapse:separate;
		border-spacing:4px 25px;
		color:black;
		width:450px;
		min-height:150px;
		margin:10px; 
		margin-left:200px;
		-webkit-box-shadow:5px 5px 5px 5px rgba(0, 0, 0, 0.3);
		border-color:black;
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
                                <li  class="active"><a href="sattendance.php">Attendance</a></li>
								<li><a href="stimetablenew.php">Time Table</a></li>
                                <li ><a href="sentermarks.php">Marks</a></li>	
                                <li><a href="sreports.php">Reports</a></li>
								<li><a href="scalender.php">Calender</a></li>
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>

<?php
        session_start();
        $conn=new mysqli("localhost","root","Ransom@006","portal");

        if($conn->connect_error){
                die("Connection failed:" .$conn->connect_error);
        }


        $reg=$_SESSION['staffId'];
        $sql="select courseId,section from staffCourse where staffId='$reg';";
        $result=$conn->query($sql);

        $i=0;
        while($row = $result->fetch_assoc()){
                $_SESSION["staffsub"][$i]=$row["courseId"];
                $_SESSION["staffsec"][$i]=$row["section"];
                $i=$i+1;
        }

?>

	    <div class="col-lg-9 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style="color:white;min-height:550px;padding-left:20px;padding-top:20px;margin:2px">
		      <form method="post" action="staffattendance_p2.php">
			       <table id="t1">
  		    <?php
                if(isset($_SESSION["staffsub"])){
                        $j=0;
                        foreach($_SESSION["staffsub"] as $v){   ?>
					<tr>
                                        <td><label font color="navy" name=<?php echo $j; ?> ><?php echo $_SESSION["staffsub"][$j]."-".$_SESSION["staffsec"][$j]; ?></td>
                                        <td><input  class="select" type ="submit" name=<?php echo $j; ?> value="GIVE ATTENDANCE"/></td>
					</tr>
                                        <?php $j=$j+1; 
                                        echo "<br />";
                        }
                } ?>

				
                    </table>
			  </form>
			  
			  <br/>
			  <form method="post" action="staffattendance_p4.php">
			       <!--<table id="t1">-->
    <?php
                        if(isset($_SESSION["student"])){
                                $s=0;	?>
<table id="t1">
              <?php                  foreach($_SESSION["student"] as $ss){   ?>
					<tr>
                                        <td><label><?php echo $_SESSION["student"][$s]; ?></label></td>
                                        <td><input class="select" type="submit" name=<?php echo "pre".$s; ?> style="width:140px;height:35px;color:green" value="present"/></td>
                                        <td><input class="select" type="submit" name=<?php echo "abs".$s; ?> style="width:140px;height:35px;color:red" value="absent"/></td>
                                        <?php echo "<br />";
                                        $s=$s+1;
                                }       ?>

                        <?php }
      ?>
			   </table>
<br /><input type="submit" class="s1" name="submit" value="submit Attendance" />

			  </form>
			  
		    </div>
	    </div>	

  </body>
</html>
