<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="home.css">
  </head>
  
  <body >
   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
   
     <div class="rows">
	  
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(0,102,255,0.7);color:white;height:80px;padding-left:20px;padding-top:20px;margin:2px">
		<img src="zaaz.jpg"alt="loading" width=80 height=60>
   
    <ul class="nav navbar-nav navbar-right">

			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out" ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
		
	    <div class="col-lg-4 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" background-color:rgba(0,102,255,0.1);color:white;min-height:800px;padding-left:20px;padding-top:20px;margin:2px">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:350px">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:4px 4px 6px black;color:white">STUDENT PORTAL</a>
                         </div>
                          	<br/><br/>
                            <hr/>							
						   <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li class="active"><a href="home.php">Profile</a></li>
                                <li><a href="attendence.php">Attendance</a></li>
                                
                                <li><a href="markh.php">Result</a></li>
								<li><a href="timetable.html">TimeTable</a></li>
																<li><a href="placement.htmlo
">Placement</a></li>
								
								<li><a href="chatbot.html">Discussion Area</a></li>
								<li><a href="funEvents.html">Fun Events</a></li>
							
								
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
		
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style=" background-color:rgba(0,102,255,0.1);color:white;min-height:800px;padding-left:20px;padding-top:20px;margin:2px">
		         <div class="container">
				    <table class="table table-responsive " id="t1"style="border-collapse:separate;border-spacing:5px 25px;color:black;width:550px;margin:25px; -webkit-box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);" >
					   <caption style="color:Navy;"><b>PERSONAL DETAILS:</b></caption>
					    <?php
						session_start(); 
					?>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Name</td>
						   <td id="td2"><?php echo $_SESSION["name"]; ?></td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Regno</td>
						   <td id="td2"><?php echo $_SESSION["regNo"]; ?></td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Program</td>
						   <td id="td2">CSE</td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Degree</td>
						   <td id="td2">B.E</td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Address</td>
						   <td id="td2">28/1,Virattipathu,Fenner colony</td>
					   </tr>
					   	<tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Contact</td>
						   <td id="td2"><?php echo $_SESSION["phoneNo"]?></td>
					   </tr>
					</table>
				 </div>
		    </div>
	    </div>
	  	
	</div>
  
   
	
	
	
	
  </body>
</html>
