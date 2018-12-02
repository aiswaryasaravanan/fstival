
<html>

  <head>
        <title>mark</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="mark.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  </head>

  <body>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <div class="rows">

	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(0,102,255,0.7);height:80px">
		       <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out"  ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
	</div>
	   <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" background-color:rgba(0,102,255,0.1);min-height:800px;">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:350px">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:4px 4px 6px black;color:white">STUDENT PORTAL</a>
                         </div>
                          	<br/><br/>
                            <hr/>
						   <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li ><a href="home.php">profile</a></li>
                                <li><a href="attendence.php">Attendence</a></li>
                                <li><a href="#">Assignments</a></li>
                                <li class="active"><a href="markh.php">Result</a></li>
								<li><a href="timetable.html">TimeTable</a></li>
								<li><a href="placement.html">Placement</a></li>
								<li><a href="#">Discussion Area</a></li>
								<li><a href="#">Fun Events</a></li>
                            </ul>

					</nav>
                 </div>
		   </div>
	    </div>
	<?php session_start(); ?>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xm-8" >

    <form action="getsubjectformark_p.php" method="post">
	    <input  id="c2" class="s1" type="submit" value="View Report"/>
    </form>


	<form class="form1" method="post" action="getmark_p.php"><table><tr><td>
        <?php
		if(isset($_SESSION["sub"])){
			$j=0;
			foreach($_SESSION["sub"] as $var){	?>
			    <input type="text" class="s2" maxlength="50" value=<?php echo $_SESSION["sub"][$j];echo "-";echo $_SESSION["courseName"][$j]; ?> ></input> 
				<input id="c2" class="s3" type="submit" name=<?php echo $j;?> value="Result" />
				<?php 
				echo "<br />";
				$j=$j+1;
			}
		}
	?>
	</td></tr></table></form>
<?php 
	if(isset($_SESSION["set"])){	?>
         <div id="d1">
	   <table id='t1'>
			                                                                    <tr> 
	                                                                               <td id='td1'>cat 1</td>
																				   <td id='td2'><?php echo $_SESSION['cat1'];?></td>
																				</tr> 
																				<tr>
												                                   <td id='td1'>Assignment 1</td>
																				   <td id='td2'><?php echo $_SESSION['assignment1'];?></td>
																				</tr> 
																				<tr>
												                                   <td id='td1'>cat 2</td>
																				   <td id='td2'><?php echo $_SESSION['cat2'];?></td>
																				</tr> 
																				<tr> 
												                                   <td id='td1'>Assignment 2</td>
																				   <td id='td2'><?php echo $_SESSION['assignment2'];?></td>
																				</tr> 
																				<tr> 
												                                   <td id='td1'>cat 3</td>
																				   <td id='td2'><?php echo $_SESSION['cat3'];?></td>
																				</tr> 
																				<tr >
																				   <td id='td1'>Assignment 3</td> 
																				   <td id='td2'><?php echo $_SESSION['assignment3'];?></td>	 
																				</tr>
																				<tr> 
												                                   <td id='td1'>Internal Consolidation</td>
																				   <td id='td2'>-</td>
																				</tr> 
																				<tr> 
												                                   <td id='td1'>Semester Mark</td>
																				   <td id='td2'>-</td>
																				</tr> 
																				<tr style='background-color:rgba(0,102,255,0.1)'> 
												                                   <td id='td1'>Total Semester Mark</td>
																				   <td id='td2'>86</td>
																				</tr> 
																		</table>
                                                    	 				

</div>
<?php } ?>
</div>
<?php
unset($_SESSION['set']);
?>
    </body>
</html>
