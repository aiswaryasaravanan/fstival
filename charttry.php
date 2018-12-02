<?php
 
$totaldays = 300;
 
$Attendance = array(
	array("y"=> 250, "name"=> "Present", "color"=> "#E7823A"),
	array("y"=> 50, "name"=> "Absent", "color"=> "#546BC1")
);
 
$Present = array(
	array("x"=> 0 ,"name"=>'15cs521' , "y"=> 30),
	array("x"=> 1 ,"name"=>'15cs530' , "y"=> 20),
	array("x"=> 2 ,"name"=>'15cs540' , "y"=> 20),
	array("x"=> 3 ,"name"=>'15cs570' , "y"=> 30),
	array("x"=> 4 ,"name"=>'15cs580' , "y"=> 50),
	array("x"=> 5 ,"name"=>'15cs590' , "y"=> 50),
	array("x"=> 6 ,"name"=>'15csPB0' , "y"=> 50),
	array("x"=> 7 ,"name"=>'15csPJ0' , "y"=> 50)
);
 
$Absent = array(
	array("x"=> 0 ,"name"=>'15cs521' , "y"=> 8),
        array("x"=> 1 ,"name"=>'15cs530' , "y"=> 0),
        array("x"=> 2 ,"name"=>'15cs540' , "y"=> 2),
        array("x"=> 3 ,"name"=>'15cs570' , "y"=> 4),
        array("x"=> 4 ,"name"=>'15cs580' , "y"=> 6),
        array("x"=> 5 ,"name"=>'15cs590' , "y"=> 10),
        array("x"=> 6 ,"name"=>'15csPB0' , "y"=> 10),
        array("x"=> 7 ,"name"=>'15csPJ0' , "y"=> 10)

);

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var totaldays = <?php echo $totaldays ?>;
var attendancelog = {
	"Attendance": [{
		click: visitorsChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Attendance",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		dataPoints: <?php echo json_encode($Attendance, JSON_NUMERIC_CHECK); ?>
	}],
	"Present": [{
		color: "#E7823A",
		name: "Present",
		type: "column",
		xValueType: "number",
		dataPoints: <?php echo json_encode($Present, JSON_NUMERIC_CHECK); ?>
	}],
	"Absent": [{
		color: "#546BC1",
		name: "Absent",
		type: "column",
		xValueType: "number",
		dataPoints: <?php echo json_encode($Absent, JSON_NUMERIC_CHECK); ?>
	}]
};
 
var AttendanceOptions = {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Attendance"
	},
	subtitles: [{
		text: "Click on Any Segment to Drilldown",
		backgroundColor: "#2eacd1",
		fontSize: 16,
		fontColor: "white",
		padding: 5
	}],
	legend: {
		fontFamily: "calibri",
		fontSize: 14,
		itemTextFormatter: function (e) {
			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totaldays * 100) + "%";  
		}
	},
	data: []
};
 
var visitorsDrilldownedChartOptions = {
	animationEnabled: true,
	theme: "light2",
	axisX: {
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2"
	},
	axisY: {
		gridThickness: 0,
		includeZero: false,
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2",
		lineThickness: 0
	},
	data: []
};
 
var chart = new CanvasJS.Chart("chartContainer", AttendanceOptions);
chart.options.data = attendancelog["Attendance"];
chart.render();
 
function visitorsChartDrilldownHandler(e) {
	chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
	chart.options.data = attendancelog[e.dataPoint.name];
	chart.options.title = { text: e.dataPoint.name }
	chart.render();
	$("#backButton").toggleClass("invisible");
}
 
$("#backButton").click(function() { 
	$(this).toggleClass("invisible");
	chart = new CanvasJS.Chart("chartContainer", AttendanceOptions);
	chart.options.data = attendancelog["Attendance"];
	chart.render();
});
 
}
</script>
<style>
  #backButton {
	border-radius: 4px;
	padding: 8px;
	border: none;
	font-size: 16px;
	background-color: #2eacd1;
	color: white;
	position: absolute;
	top: 10px;
	right: 10px;
	cursor: pointer;
  }
  .invisible {
    display: none;
  }
</style>
</head>
<body>
 
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<button class="btn invisible" id="backButton">&lt; Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>  
