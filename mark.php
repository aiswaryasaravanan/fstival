<!doctype html>
<html lang="en">
  <head>
    <title>mark</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="mark.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
   <!-- <script class="text/javascript"src="mark.js">   
   </script> -->
 
 
  
  
  <body >
   
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
                                <li ><a href="home.php">Home</a></li>
                                <li><a href="#">Attendence</a></li>
                                <li><a href="Assignments.html">Assignments</a></li>
                                <li class="active"><a href="#">Mark</a></li>
								<li><a href="#">Holidays</a></li>
								<li><a href="#">Enrollment</a></li>
								<li><a href="#">Placement</a></li>
								<li><a href="#">Higher Studies</a></li>
								<li><a href="#">Student Chatbot</a></li>
								<li><a href="#">Activity</a></li>
								
                            </ul>
			
					</nav>
                 </div>				   
				
		   </div>
	    </div>
	  	<?php session_start();?>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xm-8" >
        <form class="form" method="post" action="getsubjectformark_p.php">
            <input  id="c2" class="s1" type="button" value="View Report"/>
        </form>
			<div id="container"></div>
			<form class="form1" method="post" action="getmark_p.php">
				<script>	
					var number = 8;
					// Container <div> where dynamic content will be placed
					var container = document.getElementById("container");
					
					// Clear previous contents of the container
					while (container.hasChildNodes()) 
					{
						container.removeChild(container.lastChild);
					}
					<?php

						if(isset($_SESSION["sub"])){
							$j=0;
							foreach($_SESSION["sub"] as $varphp){	?>
							var a=0;
                            var input = document.createElement("input");
                            input.type = "text";
                            input.className="s2";
                            input.name=<?php echo $j; ?>;
                            input.value=<?php echo $_SESSION["sub"][$j];?>;
                            container.appendChild(input);
                            var input1 = document.createElement("input");
                            input1.type = "submit";
                            input1.name = <?php echo $j; ?>;
                            input1.className="s3";
                            input1.value="Result";
                </script>
            </form>

                    <script>
                            input1.addEventListener("click", function(event)
                                                            {
                                                            $("#container").html("<table id='t1'>"+
                                                                                        "<tr>"+ 
                                                                                            "<td id='td1'>cat 1</td>"+
                                                                                            "<td id='td2'><?php echo $_SESSION['cat1'];?></td>"+
                                                                                            "</tr> "+
                                                                                            "<tr>"+ 
                                                                                            "<td id='td1'>Assignment 1</td>"+
                                                                                            "<td id='td2'><?php echo $_SESSION['assignment1'];?></td>"+
                                                                                            "</tr> "+
                                                                                            "<tr>"+ 
                                                                                            "<td id='td1'>cat 2</td>"+
                                                                                            "<td id='td2'><?php echo $_SESSION['cat2'];?></td>"+
                                                                                            "</tr> "+
                                                                                            "<tr>"+ 
                                                                                            "<td id='td1'>Assignment 2</td>"+
                                                                                            "<td id='td2'><?php echo $_SESSION['assignment2'];?></td>"+
                                                                                            "</tr> "+
                                                                                            "<tr>"+ 
                                                                                            "<td id='td1'>cat 3</td>"+
                                                                                            "<td id='td2'><?php echo $_SESSION['cat3'];?></td>"+
                                                                                            "</tr> "+
                                                                                            "<tr >"+
                                                                                            "<td id='td1'>Assignment 3</td>"+ 
                                                                                            "<td id='td2'><?php echo $_SESSION['assignment3'];?></td>"+	 
                                                                                            "</tr>"+
                                                                                            "<tr>"+ 
                                                                                            "<td id='td1'>Average Cat Mark</td>"+
                                                                                            "<td id='td2'>-</td>"+
                                                                                            "</tr> "+
                                                                                            "<tr>"+ 
                                                                                            "<td id='td1'>Semester Mark</td>"+
                                                                                            "<td id='td2'>-</td>"+
                                                                                            "</tr> "+
                                                                                            "<tr style='background-color:rgba(0,102,255,0.1)'>"+ 
                                                                                            "<td id='td1'>Total Semester Mark</td>"+
                                                                                            "<td id='td2'>-</td>"+
                                                                                            "</tr> "+
                                                                                    "</table>");
                                                                                                                                        
                                                                    
                                                            }
                            
                                                    ) 
                            container.appendChild(input1);
                            
                            container.appendChild(document.createElement("br"));
                            
                        }
                </script>    		
		
	</div>
  
   
   </body>
</html>
