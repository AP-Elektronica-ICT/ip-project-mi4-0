
<?php
            include_once 'model/SensorModel.php';
            $SensorModel = new SensorClass();
            $sql1 = "SELECT * FROM humidity ORDER BY NowTimeDate ASC";
            $sql2 = "SELECT count(*) as total from humidity";
            $humi1 = $SensorModel-> HumiditySensor($sql1); 
            $humi2 = $SensorModel-> HumiditySensor($sql2); 
            $connection = new mysqli("127.0.0.1", "root", "", "mi40db", 3306);
            $query = $connection->query("SELECT * FROM humidity ");
            $array1 = Array();
            $array2 = Array();
            while($result = $query->fetch_assoc()){
                $array1[] = $result['HumiFloor1'];
                $array2[] = $result['NowTimeDate'];
            }  

?>



<html>
    <head>
<link rel="stylesheet" type="text/css" href="view/css/bovenmenu.css">
<link rel="stylesheet" type="text/css" href="view/css/environmentstyle.css">
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link rel="stylesheet" type="text/css" href="view/css/sidemenu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sensor page</title>
</head>

<body>
<?php 
    include_once 'model/menumodel.php';  
    $menuStuk = new MenuClass();
    $menuStuk-> bovenmenu('','active','');
    $menuStuk-> sidemenu('active','','','','','','');
?>
<div id="chart">
  <div id="timeline-chart"></div>
</div>



<script>
var options = {
      chart: {
        type: "area",
        height: 300,
        foreColor: "#999",
        
        stacked: true,
        dropShadow: {
          enabled: true,
          enabledSeries: [0],
          top: -2,
          left: 2,
          blur: 5,
          opacity: 0.06
        }
      },
      colors: ['#00E396', '#0090FF'],
      stroke: {
        curve: "smooth",
        width: 3
      },
      dataLabels: {
        enabled: false
      },
      series: [{
        name: 'Light off/on',
        data: generateDayWiseTimeSeries1(0, 18)
      } 
              ],
      markers: {
        size: 0,
        strokeColor: "#fff",
        strokeWidth: 3,
        strokeOpacity: 1,
        fillOpacity: 1,
        hover: {
          size: 6
        }
      },
      xaxis: {
        type: "datetime",
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        }
      },
      yaxis: {
        tickAmount: 4,
        min: 0,
        labels: {
          offsetX: 24,
          offsetY: -5
        },
        tooltip: {
          enabled: true
        }
      },
      grid: {
        padding: {
          left: -5,
          right: 5
        }
      },
      tooltip: {
        x: {
          format: "dd MMM yyyy"
        },
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left'
      },
      fill: {
        type: "solid",
        fillOpacity: 0.7
      }
    };

    var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);
  
    chart.render();
   
    
    function generateDayWiseTimeSeries1(s, count) {
      var value = 0;
      var sqlarray1 = <?php echo json_encode($array1); ?>;
      var sqlarray2 = <?php echo json_encode($array2); ?>;
      
      var i = 0;
      var series = [];
      var x;
      // counts the amount of row data inside the table
      var totaaldata = "<?php echo $humi2['total'] ?>";
      while (i < totaaldata) {
        // get the array with the earliest day time in first array and at the end is the latest day time
        var t = sqlarray2[i].split(/[- :]/);
        var firstDate = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
        value = sqlarray1[i];
        x = firstDate.getTime();
        series.push([x, value]);
        
        i++;
      }
      return series;
    }
    
</script>

       
</body>
    
</html>