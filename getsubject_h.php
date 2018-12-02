
<html>
    <head>
        <title>dummy</title>
	<style>
	table,tr{
		border:1px solid gray;
		width:75%;
		margin-left:auto;
		margin-right:auto;
		min-height:250px;
	}
	</style>


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
	<?php session_start(); ?>
    <form action="getsubject_p.php" method="post">
	    regno:<br>
	    <input type="text" name="regNo"><br>
	    <input type="submit" value="get my subject">
	    </form>
<table><tr><td>
<?php if(isset($_SESSION["ssa"])){ ?>
	<form class="form1" method="post" action="getattendance_p.php">
	<?php

		if(isset($_SESSION["sub"])){
			$j=0;	?>
			<input type="submit" name="overall" value="overall percent" />
			<?php foreach($_SESSION["sub"] as $var){	?>
				<input type="submit" name=<?php echo $j; ?> value=<?php echo $_SESSION["sub"][$j];?> />
				<?php 

				$j=$j+1;
			}
		}
	?>
	</form>
<?php } ?>
<?php if(isset($_SESSION["sa"]) and !isset($_SESSION["over"])){ ?>
	<form>
		 <div id="chartContainer" style="height: 300px; width: 100%;"></div>
		<input type="button" name="att_per" value="Attendance percent" />
		<label> <?php echo round((($_SESSION['daysPresent']/$_SESSION['noOfDays'])*100),1);?>% </label><br />
		<input type="button" name="att_day" value="Days present" />
		<label> <?php echo $_SESSION['daysPresent']; ?>/<?php echo $_SESSION['noOfDays']; ?> </label><br />
		<input type="button" name="Absent log" value="Absent Log">
		<label>yet to come </label>
	
	</form>
<?php } ?>
<?php if(isset($_SESSION["sa"]) and isset($_SESSION["over"])){ ?>
        <form>
                 <div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</form>
<?php } ?>
</td>
</tr></table>
<?php 
	unset($_SESSION["sa"]); 
?>
    </body>
</html>
