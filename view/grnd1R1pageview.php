<?php
            include_once 'model/SensorModel.php';
            $SensorModel = new SensorClass();
            $sql1 = "SELECT * FROM humidity ORDER BY NowTimeDate DESC LIMIT 1";
            $sql2 = "SELECT count(*) as total from humidity";
            $humi1 = $SensorModel-> HumiditySensor($sql1); 
            $humi2 = $SensorModel-> HumiditySensor($sql2); 

            
?>
<html>
    <head>
<link rel="stylesheet" type="text/css" href="view/css/grndF1Roomspagestyle.css"> 
<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<!-- Chart code -->

<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = generateChartData();

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.minGridDistance = 50;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "waarde";
series.dataFields.dateX = "date";
series.strokeWidth = 2;
series.minBulletDistance = 10;
series.tooltipText = "{valueY}";
series.tooltip.pointerOrientation = "vertical";
series.tooltip.background.cornerRadius = 20;
series.tooltip.background.fillOpacity = 0.5;
series.tooltip.label.padding(12,12,12,12)

// Add scrollbar
chart.scrollbarX = new am4charts.XYChartScrollbar();
chart.scrollbarX.series.push(series);

// Add cursor
chart.cursor = new am4charts.XYCursor();
chart.cursor.xAxis = dateAxis;
chart.cursor.snapToSeries = series;

function generateChartData() {
    var chartData = [];
       
    var sqlarray = <?php echo json_encode($array); ?>;
    
        const tijd = "<?php echo $humi1['NowTimeDate'] ?>";
        var t = tijd.split(/[- :]/);
        //
    var firstDate = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
    firstDate.setDate(firstDate.getDate());
    var waarde = 500;
    // checks how many data are there in a row, so how many days
    var totaaldata = "<?php echo $humi2['total'] ?>";
    for (var i = 0; i < totaaldata ; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i ); 
        
        
        waarde = sqlarray[i] ; 
        
        chartData.push({
            date: newDate,
            waarde: waarde
        });
    }
    return chartData;
}

}); // end am4core.ready()
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ground Plan</title>

<style>
    #chartdiv {
  width: 70%;
  height: 400px;
overflow: auto;
}
    .main-section{
	width:80%;
	margin:0 auto;
}
.dashbord{
	margin-top:30px;
	margin-right: 10px;
	display: inline-block;
	width:30%;
	color:#fff;
	border-radius: 3px;
}
.title-section{
	border-radius: 5px 5px 0px 0px;
	text-align: center;
	background-color:#7CD6F8;
	padding:7px 0px;
}
.title-section p{
	margin:0px;
	font-size:13px;
}
.icon-text-section{
	background-color:#5BCCF6;
	padding:5px 10px;
}
.icon-section{
	font-size:50px;
	float:left;
	width:20%;
	color:#8BDBF8;
}
.text-section{
	width:80%;
	float:right;
	text-align: right;
}
.text-section h1{
	margin:0px;
	font-size:25px;
}
.detail-section{
	background-color: #52B8DE;
	cursor: pointer;
	border-radius: 0px 0px 5px 5px;
}
.detail-section a{
	color:#fff;
}
.detail-section a p{
	display: inline-block;
	margin: 0px;
	font-size: 12px;
	padding:10px;
}
.detail-section a i{
	float:right;
	padding: 10px 5px 0px 0px;
}
.dashbord .detail-section:hover{
	background-color:#5a5a5a;
}
.download-content .title-section{
	background-color:#B0DA7A;
}
.download-content .icon-text-section{
	background-color: #9CD159;
}
.download-content .detail-section{
	background-color: #8DBC50;
}
.download-content .icon-section{
	color:#B9DE8A;
}
.product-content .title-section{
	background-color:#FF7979;
}
.product-content .icon-text-section{
	background-color:#FF5757;
}
.product-content .icon-section{
	color:#FF8989;
}
.product-content .detail-section{
	background-color:#E64F4F;
}
    
    
   
    
</style>
</head>

<body>
<div class="topnav">
  <a href="start.php?page=monitorpagecontroller">Monitor</a>
  <a href="#Control">Control</a>
  <a class="active" href="javascript:location.reload(true)">Ground Plan</a>
  <a href="start.php?page=contactpagecontroller">Contact</a>
</div>

<div class="sidebar">
  <a class="active" href="javascript:location.reload(true)">Floor 1</a>
  <a href="start.php?page=grndFl2pagecontroller">Floor 2</a>
  <a href="start.php?page=grndFl3pagecontroller">Floor 3</a>
  <a href="start.php?page=grndFl4pagecontroller">Floor 4</a>
  <a href="start.php?page=grndFl5pagecontroller">Floor 5</a>
  <a href="start.php?page=grndFl6pagecontroller">Floor 6</a>
</div>
<div id="chartdiv"></div>
<div class="main-section">
		<div class="dashbord email-content">
			<div class="title-section">
				<p>Module 1</p>
			</div>
			<div class="icon-text-section">
				<div class="icon-section">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="text-section">
					<h1>3 Sensors</h1>
					<span>Daily: Humidity, Temperature and Pressure</span>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="detail-section">
				<a href="#">
					<p>View Detail</p>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="dashbord download-content">
			<div class="title-section">
				<p>Module 2</p>
			</div>
			<div class="icon-text-section">
				<div class="icon-section">
					<i class="fa fa-download" aria-hidden="true"></i>
				</div>
				<div class="text-section">
					<h1>5 Sensors</h1>
					<span>Current, Voltage, Active Power, Reactive Power and Power Factor</span>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="detail-section">
				<a href="#">
					<p>View Detail</p>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="dashbord product-content">
			<div class="title-section">
				<p>Module 3</p>
			</div>
			<div class="icon-text-section">
				<div class="icon-section">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
				</div>
				<div class="text-section">
					<h1>1 Sensor</h1>
					<span> Light off/on</span>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="detail-section">
				<a href="#">
					<p>View Detail</p>
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>

		
	</div>       
       
</body>
    
</html>