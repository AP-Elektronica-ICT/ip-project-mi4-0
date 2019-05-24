<?php
            include_once 'model/SensorModel.php';
            $SensorModel = new SensorClass();
            $sql1 = "SELECT * FROM temperature";
            $sql2 = "SELECT * FROM humidity ORDER BY NowTimeDate DESC LIMIT 1";
            $sql3 = "SELECT * FROM brightness";
            $temp = $SensorModel-> TemperatureSensor($sql1);
            $humi = $SensorModel-> HumiditySensor($sql2); 
            $bright = $SensorModel-> BrightnessSensor($sql3);
?>
  
   <html>
    <head>
<link rel="stylesheet" type="text/css" href="view/css/bovenmenu.css"> 
<link rel="stylesheet" type="text/css" href="view/css/monitorpagestyle.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MonitorPage</title>
</head>

<body>

<?php 
    include_once 'model/menumodel.php';  
    $bovenStuk = new MenuClass();
    $bovenStuk-> bovenmenu('active','','','');
?>
<div class="Row">
    <div class="Column">
    Average Temparature (degrees)
    <?php
    
        echo "<ul>";
        echo "<li> Floor 1: ".$temp['TempFloor1']."°</li>";
        echo "<li> Floor 2: ".$temp['TempFloor2']."°</li>";
        echo "<li> Floor 3: ".$temp['TempFloor3']."°</li>";
        echo "<li> Floor 4: ".$temp['TempFloor4']."°</li>";
        echo "<li> Floor 5: ".$temp['TempFloor5']."°</li>";
        echo "<li> Floor 6: ".$temp['TempFloor6']."°</li>";
        echo "</ul>";
    
    ?>
    </div>
    <div class="Column">
    Average Humidity
    <?php
    echo "<ul>";
        echo "<li> Floor 1: ".$humi['HumiFloor1']."%</li>";
        echo "<li> Floor 2: ".$humi['HumiFloor2']."%</li>";
        echo "<li> Floor 3: ".$humi['HumiFloor3']."%</li>";
        echo "<li> Floor 4: ".$humi['HumiFloor4']."%</li>";
        echo "<li> Floor 5: ".$humi['HumiFloor5']."%</li>";
        echo "<li> Floor 6: ".$humi['HumiFloor6']."%</li>";
        echo "</ul>";
        
    ?>
    </div>
    <div class="Column">
    Average Brightness (lumen)
   <?php
     echo "<ul>";
        echo "<li> Floor 1: ".$bright['BrightFloor1']."L</li>";
        echo "<li> Floor 2: ".$bright['BrightFloor2']."L</li>";
        echo "<li> Floor 3: ".$bright['BrightFloor3']."L</li>";
        echo "<li> Floor 4: ".$bright['BrightFloor4']."L</li>";
        echo "<li> Floor 5: ".$bright['BrightFloor5']."L</li>";
        echo "<li> Floor 6: ".$bright['BrightFloor6']."L</li>";
        echo "</ul>";
    ?>
    </div>
</div>

</body>
    
</html>
