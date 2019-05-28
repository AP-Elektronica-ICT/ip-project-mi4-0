
  
   <html>
    <head>

<link rel="stylesheet" type="text/css" href="view/css/bovenmenu.css">
<link rel="stylesheet" type="text/css" href="view/css/sidemenu.css">
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link rel="stylesheet" type="text/css" href="view/css/roomspagestyle.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MonitorPage</title>
</head>

<body>

<?php 
    
    include_once 'model/menumodel.php';  
    $bovenStuk = new MenuClass();
    $bovenStuk-> bovenmenu('','active','','');
    if($room <11){
        $bovenStuk-> sidemenu('active','','','','','','');
    }
    else if($room >10 && $room<22){
        $bovenStuk-> sidemenu('','active','','','','','');
    }
    else if($room>21 && $room<32){
        $bovenStuk-> sidemenu('','','active','','','','');
    }
    else if($room>31 && $room<38){
        $bovenStuk-> sidemenu('','','','active','','','');
    }
    else if($room>40 && $room<46){
        $bovenStuk-> sidemenu('','','','','active','','');
    }
    else if($room>45 && $room<52){
        $bovenStuk-> sidemenu('','','','','','active','');
    }
    else if($room<51){
        $bovenStuk-> sidemenu('','','','','','','active');
    }
    $a = $result1['sensor_value'];
    $bovenStuk-> modulemenu($room,$result1['sensor_value'],$result2['sensor_value'],$result3['sensor_value'],$result4['sensor_value'],$result5['sensor_value'],$result6['sensor_value'],$result7['sensor_value'],$result8['sensor_value'],$result9['sensor_value']);
    
?>




</body>
    
    
</html>
