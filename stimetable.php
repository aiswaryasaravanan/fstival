
<!doctype html>
<html lang="en">
  <head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
    <title>timetable</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="timetable.css">
	<style>
	   .nav-pills > li >a
	   {
		   color:#4d4242;
	   }
	   
	   .nav-pills > li.active > a
	   {
           background-color:#ec9516;
		   
       }
	    .nav-pills > li.active > a:hover
	   {
           background-color:#ec9516 ;
       }
	</style>
  </head>
  
  
  
  <body>
<?php session_start(); ?>   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
   
     <div class="rows">
	     <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:#ed8b18;color:white;height:1px;padding-left:20px;padding-top:20px;margin:2px">
		   </div>
	    </div>
		
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:#4d4242;color:white;height:80px;padding-left:20px;padding-top:20px;margin:2px">
		       <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out" ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
		
	    <div class="col-lg-3 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" ;color:white;min-height:600px;padding-left:20px;padding-top:20px;padding-left:5px;margin:1px">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:250px;">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:2px 2px 2px ;color:#ed8b18">STAFF PORTAL</a>
                         </div>
                          	<br/><br/>
                            <hr/>							
						  <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li ><a href="home.php">Profile</a></li>
                                <li ><a href="#">Attendance</a></li>
								<li><a href="#">Assignments</a></li>
								<li class="active"><a href="timetable.php">Time Table</a></li>
                                <li><a href="#">Result</a></li>
                                <li><a href="reports.php">Reports</a></li>
								<li><a href="calender.html">Calender</a></li>	
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
		
	    <div class="col-lg-9 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style="color:white;min-height:600px;padding-left:10px;padding-top:20px;">
		          <h2 align="center" style="font-family:comic san ms"><font color="Navy">TIME TABLE</font></h2>
						<table id="t1" border="0.1"  >
							<tr id="tr1">
 								<td style="align:center;color:navy;font-size:19px;"></td>
 								<td><font color="black">9:00-10:00</font></td>
 								<td><font color="black">10:00-11:00</font></td>
 								<td><font color="black">11:15-12:15</font></td>
 								<td><font color="black">12:15-1:15</font></td>
 								<td><font color="black">1:15-2:15</font></td>
 								<td><font color="black">2:15-3:15</font></td>
 								<td><font color="black">3:15-4:15</font></td>
							</tr>
							<tr>
 								<td style="background-color:rgba(192,192,192,0.3);"align="center"><font color="black"> <?php echo $_SESSION["day"]["0"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p1"]["0"]; ?>
</font></td>
                                <td align="center"><font color="navy"> <?php echo $_SESSION["p2"]["0"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p3"]["0"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p4"]["0"]; ?>
</font></td>
 								<td rowspan="6"align="center"><font color="black">L<br>U<br>N<br>C<br>H</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p5"]["0"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p6"]["0"]; ?>
</font></td>
 
							</tr>
							<tr>
 								<td style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black"> <?php echo $_SESSION["day"]["1"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p1"]["1"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p2"]["1"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p3"]["1"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p4"]["1"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p5"]["1"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p6"]["1"]; ?>
</font></td>
							</tr>
							<tr>
 								<td style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black"> <?php echo $_SESSION["day"]["2"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p1"]["2"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p2"]["2"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p3"]["2"]; ?>
</font></td>	
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p4"]["2"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p5"]["2"]; ?>
</font></td>
                                                                <td align="center"><font color="navy"> <?php echo $_SESSION["p6"]["2"]; ?></font></td>
                               
							</tr>
							<tr>
 								<td  style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black"> <?php echo $_SESSION["day"]["3"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p1"]["3"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p2"]["3"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p3"]["3"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p4"]["3"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p5"]["3"]; ?>
</font></td>
 								<td align="center"><font color="navy"> <?php echo $_SESSION["p6"]["3"]; ?>
</font></td>
 
							</tr>
							<tr>
 								<td  style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black"> <?php echo $_SESSION["day"]["4"]; ?>
</font></td>
								 <td align="center"><font color="navy"> <?php echo $_SESSION["p1"]["4"]; ?>
</font></td>
								 <td align="center"><font color="navy"> <?php echo $_SESSION["p2"]["4"]; ?>
</font></td>
								 <td align="center"><font color="navy"> <?php echo $_SESSION["p3"]["4"]; ?>
</font></td>
								 <td align="center"><font color="navy"> <?php echo $_SESSION["p4"]["4"]; ?>
</font></td>
								 <td align="center"><font color="navy"> <?php echo $_SESSION["p5"]["4"]; ?>
</font></td>
								 <td align="center"><font color="navy"> <?php echo $_SESSION["p6"]["4"]; ?>
</font></td>
 
							</tr>
							
					</table>


</body>
</html>
