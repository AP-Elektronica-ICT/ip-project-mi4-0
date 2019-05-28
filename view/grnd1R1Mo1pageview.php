
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





       
</body>
    
</html>