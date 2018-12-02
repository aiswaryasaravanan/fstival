<!doctype html>
<html lang="en">
  <head>
    <title>timetable</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="stimetable.css">
	<style>
	   .nav-pills > li >a
	   {
		   color:purple;
	   }
	   
	   .nav-pills > li.active > a
	   {
           background-color:rgba(128,0,128,0.7);
		   
       }
	    .nav-pills > li.active > a:hover
	   {
           background-color: rgba(128,0,128,0.8);
       }
	</style>
  </head>
  
  
  
  <body>
   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(128,0,128,0.8);color:white;height:80px;padding-left:20px;padding-top:20px;margin:2px">
		       <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out" ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
		
	    <div class="col-lg-3 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" background-color:rgba(128,0,128,0.1);color:white;min-height:600px;padding-left:20px;padding-top:20px;padding-left:15px;margin:1px">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:250px;">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:4px 4px 6px black;color:white">STAFF PORTAL</a>
                         </div>
                          	<br/><br/>
                            <hr/>							
						  <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li ><a href="shome.php">Profile</a></li>
                                <li ><a href="sattendance.php">Attendance</a></li>
								<li class="active"><a href="stimetablenew.php">Time Table</a></li>
                                <li><a href="sentermarks.php">Marks</a></li>
                                <li><a href="sreports.php">Reports</a></li>
								<li><a href="scalender.html">Calender</a></li>	
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
		
	    <div class="col-lg-9 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style="color:white;min-height:600px;padding-left:10px;padding-top:20px;">
		          <h2 align="center" style="font-family:comic san ms"><font color="navy">TIME TABLE</font></h2>
						<table id="t1" border="0.1"  >
							<tr id="tr1">
 								<td style="align:center;color:purple;font-size:19px;"></td>
 								<td><font color="black">9:00-10:00</font></td>
 								<td><font color="black">10:00-11:00</font></td>
 								<td><font color="black">11:15-12:15</font></td>
 								<td><font color="black">12:15-1:15</font></td>
 								<td><font color="black">1:15-2:15</font></td>
 								<td><font color="black">2:15-3:15</font></td>
 								<td><font color="black">3:15-4:15</font></td>
 
							</tr>
							<tr>
 								<td style="background-color:rgba(192,192,192,0.3);"align="center"><font color="black">MONDAY</font></td>
 								<td align="center"><font color="gray">---</font></td>
                                <td align="center"><font color="gray">14cs521</font></td>
 								<td align="center"><font color="gray">14cs530</font></td>
 								<td align="center"><font color="gray">14cs580</font></td>
 								<td rowspan="6"align="center"><font color="black">L<br>U<br>N<br>C<br>H</font></td>
 								<td align="center"><font color="gray">14cs570</font></td>
 								<td align="center"><font color="gray">14csPBO</font></td>
 
							</tr>
							<tr>
 								<td style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black">TUESDAY</font></td>
 								<td align="center"><font color="gray">14cs530</font></td>
 								<td align="center"><font color="gray">14cs540</font></td>
 								<td align="center"><font color="gray">14cs521</font></td>
 								<td align="center"><font color="gray">---</font></td>
 								<td align="center"><font color="gray">14cs570</font></td>
 								<td align="center"><font color="gray">14cs580</font></td>
 
							</tr>
							<tr>
 								<td style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black">WEDNESDAY</font></td>
 								<td align="center"><font color="gray">14cs540</font></td>
 								<td align="center"><font color="gray">14cs521</font></td>
 								<td align="center"><font color="gray">14cs530</font></td>	
 								<td align="center"><font color="gray">---</font></td>
 								<td colspan="2" style="align:center;"><font color="gray">lab</font></td>
                               
							</tr>
							<tr>
 								<td  style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black">THURSDAY</font></td>
 								<td align="center"><font color="gray">14cs540</font></td>
 								<td align="center"><font color="gray">14cs580</font></td>
 								<td align="center"><font color="gray">14cs530</font></td>
 								<td align="center"><font color="gray">---</font></td>
 								<td align="center"><font color="gray">14cs570</font></td>
 								<td align="center"><font color="gray">14cs590</font></td>
 
							</tr>
							<tr>
 								<td  style="background-color:rgba(192,192,192,0.3);" align="center"><font color="black">FRIDAY</font></td>
								 <td align="center"><font color="gray">14cs540</font></td>
								 <td align="center"><font color="gray">14cs530</font></td>
								 <td align="center"><font color="gray">14cs590</font></td>
								 <td align="center"><font color="gray">---</font></td>
								 <td align="center"><font color="gray">14cs580</font></td>
								 <td align="center"><font color="gray">14cs570</font></td>
 
							</tr>
							
					</table>


</body>
</html>
