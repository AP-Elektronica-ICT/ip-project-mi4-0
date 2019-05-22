<?php
            include_once '../model/SensorModel.php';
            $SensorModel = new SensorClass();
            $sql1 = "SELECT * FROM humidity ORDER BY NowTimeDate DESC LIMIT 1";
            $sql2 = "SELECT count(*) as total from humidity";
            $humi1 = $SensorModel-> HumiditySensor($sql1); 
            $humi2 = $SensorModel-> HumiditySensor($sql2); 
            $connection = new mysqli("127.0.0.1", "root", "", "mi40db", 3306);
            $query = $connection->query("SELECT HumiFloor1 FROM humidity ");
            $array = Array();
            while($result1 = $query->fetch_assoc()){
                $array[] = $result1['HumiFloor1'];
            }     

?>


<html>
    <head>
<link rel="stylesheet" type="text/css" href="../view/css/grndF1Roomspagestyle.css"> 
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
var chart1 = am4core.create("chartdiv1", am4charts.XYChart);
var chart2 = am4core.create("chartdiv2", am4charts.XYChart);
// Add data
chart1.data = generateChartData1();
// chart2.data = generateChartData2();

// Create axes
var dateAxis1 = chart1.xAxes.push(new am4charts.DateAxis());
var dateAxis2 = chart2.xAxes.push(new am4charts.DateAxis());    
dateAxis1.renderer.minGridDistance = 50;
dateAxis2.renderer.minGridDistance = 50;

var valueAxis1 = chart1.yAxes.push(new am4charts.ValueAxis());
var valueAxis2 = chart2.yAxes.push(new am4charts.ValueAxis());

// Create series 1
var series1 = chart1.series.push(new am4charts.LineSeries());
series1.dataFields.valueY = "waarde";
series1.dataFields.dateX = "date";
series1.strokeWidth = 2;
series1.minBulletDistance = 10;
series1.tooltipText = "{valueY}";
series1.tooltip.pointerOrientation = "vertical";
series1.tooltip.background.cornerRadius = 20;
series1.tooltip.background.fillOpacity = 0.5;
series1.tooltip.label.padding(12,12,12,12)
// Create series 2
var series2 = chart2.series.push(new am4charts.LineSeries());
series2.dataFields.valueY = "waarde";
series2.dataFields.dateX = "date";
series2.strokeWidth = 2;
series2.minBulletDistance = 10;
series2.tooltipText = "{valueY}";
series2.tooltip.pointerOrientation = "vertical";
series2.tooltip.background.cornerRadius = 20;
series2.tooltip.background.fillOpacity = 0.5;
series2.tooltip.label.padding(12,12,12,12)
// Add scrollbar 1
chart1.scrollbarX = new am4charts.XYChartScrollbar();
chart1.scrollbarX.series.push(series1);
// Add scrollbar 2
chart2.scrollbarX = new am4charts.XYChartScrollbar();
chart2.scrollbarX.series.push(series2);

// Add cursor 1
chart1.cursor = new am4charts.XYCursor();
chart1.cursor.xAxis = dateAxis1;
chart1.cursor.snapToSeries = series1;
// Add cursor 2
chart2.cursor = new am4charts.XYCursor();
chart2.cursor.xAxis = dateAxis2;
chart2.cursor.snapToSeries = series2;

function generateChartData1() {
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
    #chartdiv1 {
  width: 70%;
  height: 400px;
overflow: auto;
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
<div id="chartdiv1"></div>
<div id="chartdiv2"></div>

       
</body>
    
</html>