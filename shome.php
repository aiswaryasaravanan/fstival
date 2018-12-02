<!doctype html>
<html lang="en">
  <head>
    <title>ZaaZ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="shome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
	   
	</script>
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
	img.i1 {border-radius: 50%;}
	#d1
	{
		color:black;
		width:245px;
		height:250px;
		margin:10px; 
		-webkit-box-shadow:5px 5px 5px 5px rgba(0, 0, 0, 0.3);
		background-color:white;
		}
    #d2
	{
		color:black;
		width:245px;
		margin:10px; 
		-webkit-box-shadow:6px 7px 5px rgba(0, 0, 0, 0.3);
		background-color:none;
		}
		
		
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		* {box-sizing: border-box;}
		
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 1000px;
		  position: relative;
		  margin: auto;
		}

		

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 3.5s;
		  animation-name: fade;
		  animation-duration: 3.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}

	</style>
  </head>
  
  <body >
   <?php session_start(); ?>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  
		
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(s6.png);background-repeat:no-repeat;">
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
                                <li class="active"><a href="shome.php">Profile</a></li>
                                <li ><a href="sattendance.php">Attendance</a></li>
								<li><a href="stimetablenew.php">Time Table</a></li>
                                <li ><a href="sentermarks.php">Marks</a></li>
                                <li> <a href="sreports.php">Reports</a></li>
								<li><a href="scalender.php">Calender</a></li>
								
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
		
	    <div class="col-lg-6 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style=" background-color:rgba(128,0,128,0.1);color:white;min-height:600px;padding-left:20px;padding-top:20px;margin:2px">
		         <div class="container">
				    <table class="table table-responsive " id="t1"style="border-collapse:separate;border-spacing:5px 25px;color:black;width:550px;margin:25px; -webkit-box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.3);" >
					   <label style="color:Navy;font-size:18px;margin:15px"><b>PERSONAL DETAILS:</b></label>
					   <input type="button" class="s1" value="Password Reset"/>
					    
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">StaffId</td>
						   <td id="td2"><?php echo $_SESSION["staffId"]; ?></td>
					   </tr>
					
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Name</td>
						   <td id="td2"><?php echo $_SESSION["name"]; ?></td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Department</td>
						   <td id="td2">CSE</td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Degree</td>
						   <td id="td2">M.E</td>
					   </tr>
					   <tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Address</td>
							   <td id="td2">163/1/2 kamarajar salai, thangam nagar,Madurai-9</td>
					   </tr>
					   	<tr style="background-color:rgba(255,255,255,1)">
					       <td id="td1">Contact</td>
						   <td id="td2"><?php echo $_SESSION["phoneNo"]?></td>
					   </tr>
					</table>
				 </div>
		    </div>
	    </div>
		<div class="col-lg-3 col-md-8 col-sm-8 col-xm-8" >
	        <div class="boxdiv" style=" background-color:rgba(128,0,128,0.1);color:white;min-height:600px;padding-left:20px;padding-top:20px;margin:2px">
		         <div id="d2">
				 <img class="i1"src="n1.jpg" alt="default" style="width:130px;height:180px;margin:20px;margin-left:50px;">
                 </div>	
				 <br/><br/>			 
				 <div id="d1">
				       <div class="slideshow-container">

						<div class="mySlides fade">
						  <div class="numbertext">1 / 5</div>
						  <a href="#"><img src="c1.jpg" style="width:245px;height:250px"/></a>
						  
						</div>

						<div class="mySlides fade">
						  <div class="numbertext">2 / 5</div>
						  <a href="#"><img src="c2.jpg" style="width:245px;height:250px"/></a>
						  
						</div>

						<div class="mySlides fade">
						  <div class="numbertext">3 / 5</div>
						  <a href="#"><img src="c3.jpg" style="width:245px;height:250px"/></a> 
						</div>
						<div class="mySlides fade">
						  <div class="numbertext">4 / 5</div>
						  <a href="#"><img src="c4.jpg" style="width:245px;height:250px"/></a> 
						</div>
						<div class="mySlides fade">
						  <div class="numbertext">5 / 5</div>
						  <a href="#"><img src="c5.jpg" style="width:245px;height:250px"/></a> 
						</div>

				</div>
				<br>

				<div align="center">
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
						<span class="dot"></span> 
				</div>
			     </div>
		         
		    </div>
	    </div>
	  	
	
   <script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
				   slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>

	
  </body>
</html>
