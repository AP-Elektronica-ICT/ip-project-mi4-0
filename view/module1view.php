
<?php
            $connection = new mysqli("35.195.134.226", "mi40", "root", "mi40db", 3306);
            $query = $connection->query("SELECT sensor_value,NowTimeDate  FROM sensor s,modulesroom m WHERE s.sensor_id = 1 ORDER BY NowTimeDate asc");
            $query4 = $connection->query("SELECT sensor_value,NowTimeDate  FROM sensor s,modulesroom m WHERE s.sensor_id = 2 ORDER BY NowTimeDate asc");
            $query5 = $connection->query("SELECT sensor_value,NowTimeDate  FROM sensor s,modulesroom m WHERE s.sensor_id = 3 ORDER BY NowTimeDate asc");
         //   $query1 = $connection->query("SELECT sensor_value,NowTimeDate  FROM sensor s,modulesroom m WHERE s.sensor_id = 1 ORDER BY NowTimeDate asc ");
         //   $result1 = $query1->fetch_assoc();
            $query1 = $connection->query("SELECT count(*) as total from sensor WHERE sensor_id = 1");
            $query2 = $connection->query("SELECT count(*) as total from sensor WHERE sensor_id = 2");
            $query3 = $connection->query("SELECT count(*) as total from sensor WHERE sensor_id = 3");
            $result1 = $query1->fetch_assoc();
            $result2 = $query2->fetch_assoc();
            $result3 = $query3->fetch_assoc();   
            $array1 = Array();
            $array2 = Array();
            $array3 = Array();
            $array4 = Array();
            $array5 = Array();
            $array6 = Array();
            
            while($result = $query->fetch_assoc()){
                $array1[] = $result['sensor_value'];
                $array2[] = $result['NowTimeDate'];
            }
             while($result4 = $query4->fetch_assoc()){
                $array3[] = $result4['sensor_value'];
                $array4[] = $result4['NowTimeDate'];
            }  
             while($result5 = $query->fetch_assoc()){
                $array5[] = $result5['sensor_value'];
                $array6[] = $result5['NowTimeDate'];
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
<style>

    </style>

<body>
<?php 
    include_once 'model/menumodel.php';  
    $menuStuk = new MenuClass();
    $menuStuk-> bovenmenu('','active','');
    if($room <11){
        $menuStuk-> sidemenu('active','','','','','','');
    }
    else if($room >10 && $room<22){
        $menuStuk-> sidemenu('','active','','','','','');
    }
    else if($room>21 && $room<32){
        $menuStuk-> sidemenu('','','active','','','','');
    }
    else if($room>31 && $room<38){
        $menuStuk-> sidemenu('','','','active','','','');
    }
    else if($room>40 && $room<46){
        $menuStuk-> sidemenu('','','','','active','','');
    }
    else if($room>45 && $room<52){
        $menuStuk-> sidemenu('','','','','','active','');
    }
    else if($room<51){
        $menuStuk-> sidemenu('','','','','','','active');
    }
    
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
      series: [
      {
        name: 'Temperature °C',
        data: generateDayWiseTimeSeries1(0, 18)
      },
      {
        name: 'Humidity %',
        data: generateDayWiseTimeSeries2(0, 18)
      } ,
      {
        name: 'Pressure P',
        data: generateDayWiseTimeSeries3(0, 18)
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
      var totaaldata = "<?php echo $result1['total'] ?>";
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
    function generateDayWiseTimeSeries2(s, count) {
      var value = 0;
      var sqlarray3 = <?php echo json_encode($array3); ?>;
      var sqlarray4 = <?php echo json_encode($array4); ?>;
      
      var i = 0;
      var series = [];
      var x;
      // counts the amount of row data inside the table
      var totaaldata = "<?php echo $result4['total'] ?>";
      while (i < totaaldata) {
        // get the array with the earliest day time in first array and at the end is the latest day time
        var t = sqlarray4[i].split(/[- :]/);
        var firstDate = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
        value = sqlarray3[i];
        x = firstDate.getTime();
        series.push([x, value]);
        
        i++;
      }
      return series;
    }
    function generateDayWiseTimeSeries3(s, count) {
      var value = 0;
      var sqlarray5 = <?php echo json_encode($array5); ?>;
      var sqlarray6 = <?php echo json_encode($array6); ?>;
      var i = 0;
      var series = [];
      var x;
      // counts the amount of row data inside the table
      var totaaldata = "<?php echo $result5['total'] ?>";
      while (i < totaaldata) {
        // get the array with the earliest day time in first array and at the end is the latest day time
        var t = sqlarray6[i].split(/[- :]/);
        var firstDate = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
        value = sqlarray5[i];
        x = firstDate.getTime();
        series.push([x, value]);
        
        i++;
      }
      return series;
    }
</script>

       
</body>
    
</html>