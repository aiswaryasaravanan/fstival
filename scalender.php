<!doctype html>
<html lang="en">
  <head>
    <title>ZaaZ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="scalender.css">
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
           background-color:rgba(128,0,128,0.8) ;
       }
	</style>
  </head>
  
  
  
  <body >
   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
		
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(128,0,128,0.8);color:white;height:80px;padding-left:20px;padding-top:20px;margin:2px">
		       <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out" ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
		
	    <div class="col-lg-3 col-md-4 col-sm-4 col-xm-4" >
	       <div class="boxdiv" style=" background-color:rgba(128,0,128,0.1);color:white;min-height:600px;padding-left:20px;padding-top:20px;padding-left:5px;margin:1px">
		         <div class="container" >
				    <nav class="navbar navbar-default " role="navigation" style="width:250px;">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:20px;text-shadow:4px 4px 6px black ;color:white">STAFF PORTAL</a>
                         </div>                     	<br/><br/>
                            <hr/>							
						   <ul class="nav nav-pills  nav-stacked" id="u1">
                                <li ><a href="shome.php">Profile</a></li>
                                <li ><a href="sattendance.php">Attendance</a></li>
								<li><a href="stimetablenew.php">Time Table</a></li>
                                <li><a href="sentermarks.php">Marks</a></li>
                                <li><a href="sreports.php">Reports</a></li>
								<li class="active" ><a href="scalender.php">Calender</a></li>
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
		
	    <div class="col-lg-9 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style=" color:black;min-height:700px;padding-left:20px;padding-top:20px;margin:2px">
		          <iframe src="https://calendar.google.com/calendar/embed?title=CALENDAR&amp;height=600&amp;wkst=1&amp
                  ;bgcolor=%23ffffff&amp;src=en.indian%23holiday%40group.v.calendar.google.com&amp;color=%2329527A&amp;ctz=Asia%2FCalcutta" 
                  style="border:solid 1px #777;margin:10px;"
                  width="800" height="600" frameborder="0" scrolling="no"></iframe>
	  	
	        </div>
        </div>
   
	
	
	
	
  </body>
</html>
