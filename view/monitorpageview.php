<?php
            $connection = new mysqli("35.195.134.226", "mi40", "root", "mi40db", 3306);
            $query1 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 1 ORDER BY NowTimeDate desc ");
            $query2 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 2 ORDER BY NowTimeDate desc");
            $query3 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 3 ORDER BY NowTimeDate desc");
            $result1 = $query1->fetch_assoc();
            $result2 = $query2->fetch_assoc();
            $result3 = $query3->fetch_assoc();
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
        echo "<li> Floor 1: ".$result1['sensor_value']."°</li>";
        echo "<li> Floor 2: ".$result1['sensor_value']."°</li>";
        echo "<li> Floor 3: ".$result1['sensor_value']."°</li>";
        echo "<li> Floor 4: ".$result1['sensor_value']."°</li>";
        echo "<li> Floor 5: ".$result1['sensor_value']."°</li>";
        echo "<li> Floor 6: ".$result1['sensor_value']."°</li>";
        echo "</ul>";
    
    ?>
    </div>
    <div class="Column">
    Average Humidity
    <?php
    echo "<ul>";
        echo "<li> Floor 1: ".$result2['sensor_value']."%</li>";
        echo "<li> Floor 2: ".$result2['sensor_value']."%</li>";
        echo "<li> Floor 3: ".$result2['sensor_value']."%</li>";
        echo "<li> Floor 4: ".$result2['sensor_value']."%</li>";
        echo "<li> Floor 5: ".$result2['sensor_value']."%</li>";
        echo "<li> Floor 6: ".$result2['sensor_value']."%</li>";
        echo "</ul>";
        
    ?>
    </div>
    <div class="Column">
    Average Brightness (lumen)
   <?php
     echo "<ul>";
        echo "<li> Floor 1: ".$result3['sensor_value']."L</li>";
        echo "<li> Floor 2: ".$result3['sensor_value']."L</li>";
        echo "<li> Floor 3: ".$result3['sensor_value']."L</li>";
        echo "<li> Floor 4: ".$result3['sensor_value']."L</li>";
        echo "<li> Floor 5: ".$result3['sensor_value']."L</li>";
        echo "<li> Floor 6: ".$result3['sensor_value']."L</li>";
        echo "</ul>";
    ?>
    </div>
</div>


</body>
    
</html>
