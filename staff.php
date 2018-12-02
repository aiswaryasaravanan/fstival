<!doctype html>
<html lang="en">
  <head>
    <title>ZaaZ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="student.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
	   
	</script>
	<style>
	  .nav-pills > li >a
	   {
		   color:navy;
	   }
	.nav-pills > li.active > a
	{
    background-color:rgba(0,0,128,0.7) ;
    }
	.nav-pills > li.active > a:hover
	{
    background-color:rgba(0,0,128,0.8);
    }
	img.i1 {border-radius: 50%;}
	#d1
	{
		color:black;
		width:500px;
		min-height:265px;
		margin:10px; 
		margin-left:300px;
		-webkit-box-shadow:5px 5px 5px 5px rgba(0, 0, 0, 0.3);
		background-color:white;
		text-align:center;
		}
	
	label.l1
	{
		
		color:purple;
		font-size:18px;
		padding:4px;
		font-variant:small-caps;
	}
	 #t1
    {
		border-collapse:separate;
		border-spacing:4px 25px;
		color:black;
		min-width:300px;
		min-height:150px;
		margin:20px; 
		margin-left:250px;
		-webkit-box-shadow:5px 5px 5px 5px rgba(0, 0, 0, 0.3);
		border-color:black;
		background-color:white;
	}
    
	td
	{
		font-variant:small-caps;
		text-align:center;
		color:black;
		font-size:20px;
		width:150px;
		
	}
	
	
    th 
	{
		color: navy;
		font-size:18px;
		width:100px;
		font-variant:small-caps;
		text-align:center;
		padding:10px;
    }

    
		 
	</style>
  </head>
  
  <body >
   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  
		
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-image:url(Images/s6.png);background-repeat:no-repeat;">
	       <div class="boxdiv" style=" background-color:rgba(0,0,128,0.8);color:white;height:80px;padding-left:20px;padding-top:20px;margin:2px">
		       <ul class="nav navbar-nav navbar-right" margin-left="50px">
			       <li style="margin-right:20px;margin-bottom:5px"><a href="#" class="a1"><span class="glyphicon glyphicon-log-out" ></span>Logout</a></li>
			   </ul>
		   </div>
	    </div>
		
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12" >
	       <div class="boxdiv" style=" background-color:rgba(0,0,128,0.1);color:white;min-height:600px;padding-left:20px;padding-top:20px;padding-left:5px;margin:1px">
		         
				    <nav class="navbar navbar-default " role="navigation" style="width:1290px;margin-left:10px; margin-top:0px;">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#" style="padding:15px;text-shadow:4px 4px 6px black ;color:white">ADMIN PORTAL</a>
                         </div>                     								
						   <ul class="nav nav-pills " id="u1">
                                
                                <li style="padding-left:30px" ><a href="student.php">Student</a></li>
								<li class="active" style="padding-left:30px"><a href="staff.php">Staff</a></li>
                                <li style="padding-left:30px"><a href="subject.php">Subject</a></li>								
                            </ul>
			
					</nav>
					
              <div class="boxdiv" style="color:white;min-height:700px;padding-left:20px;padding-top:20px;margin:2px">
		         <div class="container">
				
				         <?php session_start(); ?>                  
                 <form action="admintoadd_p2.php" method="post">
						<div id="d1">
							
                            <label class="l1" >staffId</label><input class="s1" type="text" name="addStaffId" placeholder="Enter staffId" /><br />
							<label class="l1">Name</label><input class="s1" type="text" name="addName" placeholder="Enter Name" /><br />
							<label class="l1">PhoneNo</label><input class="s1" type="text" name="addPhoneNo" placeholder="Enter PhoneNo" /><br />
							<input type="submit" class="select" style="width:250px;height:40px"name="addStaff" value="ADD STAFF" /><br /><br />
                             <hr/>
							<label class="l1">staffId</label><input class="s1" type="text" name="deleteStaffId" placeholder="Enter staffId" /><br />
							<input type="submit" class="select" style="width:250px;height:40px" name="deleteStaff" value="DELETE STAFF" /><br /><br />
                             <hr/>
							<input type="submit" class="select"style="width:250px;height:40px;margin-bottom:20px;" name="showStaff" value="SHOW STAFF" /><br />							 
						</div>
						
			    </form>
				
				
				<div class="wrapper">
				<?php if(isset($_SESSION["staffstaffId"])){?>
						 <table  id="t1">
					    
								   <tr>
									   <th >StaffId</th>
									   <th>Name</th>
									   <th >PhoneNo</th>
									   <th >email</th>
								   </tr>
								   <tr>
								   <?php $i=0; 
                foreach($_SESSION["staffstaffId"] as $qqq){?>
									   <td ><font color="green"><?php echo $_SESSION["staffstaffId"][$i]; ?></td>
									   <td ><font color="red"><?php echo $_SESSION["staffname"][$i]; ?></td>
										<td><?php echo $_SESSION["staffphoneNo"][$i]; ?></td>
									   <td style="font-variant:none"><font color="purple"><?php echo $_SESSION["staffemail"][$i]; ?></td>
								   </tr>
								    <?php $i=$i+1;
                } ?>
								   
					  
					        </table>
							<?php } ?>
							<?php session_destroy(); ?>
						</div>

  
					 				 
				 </div>
		    </div>		   
				
		   </div>
	    </div>
		
		
	    
	
  </body>
</html>
