
<html>

  <head>
        <title>attendence</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="attend.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <?php session_start();?>
		  <script type="text/javascript">
		  window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer",
			{
			  title:{
				text: "Attendance Percent"
			  },
			  data: [
			  {
			   type: "doughnut",
			   dataPoints: [
			   {  y: <?php echo round($_SESSION["percent"],1); ?>},
			   {  y: <?php echo (100-round($_SESSION["percent"],1)); ?>}
			   ]
			 }
			 ]
		   });

			chart.render();
		  }
		  </script>
 <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  </head>
  
  <body>
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
   
     <div class="rows">
	  
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(0,102,255,0.7);height:80px">
 <img src="zaaz.jpg"alt="loading" width=80 height=60>		     
  <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out"  ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
		
	   			   
				
	</div>
	   
		
	   <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" background-color:rgba(0,102,255,0.1);min-height:700px;">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:350px">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:4px 4px 6px black;color:white">STUDENT PORTAL</a>
                         </div>
                          	<br/><br/>
                            <hr/>							
						   <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li ><a href="home.php">Profile</a></li>
                                <li class="active"><a href="attendence.php">Attendence</a></li>
                               
                                <li ><a href="markh.php">Result</a></li>
								<li><a href="timetable.html">Time Table</a></li>
							
								<li><a href="placement.html">Placement</a></li>
							
								<li><a href="chatbot.html">Discussion Area</a></li>
								<li><a href="funEvents.html">Fun Events</a></li>
								
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
	
	<div class="col-lg-8 col-md-8 col-sm-8 col-xm-8" >
			
					<form action="getsubject_p.php" method="post">
						<input class="s1" type="submit" value="View Attendance"/>
				    </form>
				<table>
				   <tr>
				      <td>
				        <?php if(isset($_SESSION["ssa"])){ ?>
						<form class="form1" method="post" action="getattendance_p.php">
						<?php

							if(isset($_SESSION["sub"])){
								$j=0;	?>
								<input class="s2" type="submit" name="overall" value="Overall Percent" />
								<?php foreach($_SESSION["sub"] as $var){	?>
									<input class="s2" type="submit" name=<?php echo $j; ?> value=<?php echo $_SESSION["sub"][$j];?> />
									<?php 

									$j=$j+1;
								}
							}
						?>
						</form>
				<?php } ?>
				<?php if(isset($_SESSION["sa"])){ ?>
						<form>
							 <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<?php if(!isset($_SESSION["over"])){ ?>
							 <table id="t1">
							    <tr>
								   <td id="td1">Attendance percent</td>
								   <td id="td2"> <?php echo round((($_SESSION['daysPresent']/$_SESSION['noOfDays'])*100),1);?>% </td>
								</tr>
							 
							    <tr>
								   <td id="td1">Days present</td>
								   <td id="td2"> <?php echo $_SESSION['daysPresent']; ?>/<?php echo $_SESSION['noOfDays']; ?>  </td>
								</tr>
						
							    <tr>
								   <td id="td1">Absent Log</td>
								   <td id="td2">yet to come </td>
								</tr>
							 </table>
				<?php } ?> 
						
						</form>
						<?php } ?>
						<?php if(isset($_SESSION["sa"]) and isset($_SESSION["ssa"])){ ?> 								<form>
										 <div id="chartContainer" style="height: 300px; width: 100%;"></div>
							</form>
						<?php } ?> 
				    </td>
				   </tr>
				</table>
				<?php 
				/*	unset($_SESSION[""]); */
				?>
	
    </div>

 </body>
</html>
