<?php

class SensorClass{
    
    private $dbIpHost = "35.195.134.226";
    private $dbname = "mi40db";
    private $dbHostName = "mi40";
    private $dbPassword = "root";
    public $con;
    //connectie make met de database
    
    public function __construct(){
        $this->con = mysqli_connect($this->dbIpHost,$this->dbHostName,$this->dbPassword,$this->dbname);
    }
    
    public function TemperatureSensor($sql1){
        $result1 = mysqli_query($this->con,$sql1);
        $temp = mysqli_fetch_array($result1);
        return $temp;
    }
    
    public function HumiditySensor($sql2){
        $result2 = mysqli_query($this->con,$sql2);
        $humi = mysqli_fetch_array($result2);
        return $humi;
    }
    
    public function BrightnessSensor($sql3){
        $result3 = mysqli_query($this->con,$sql3);
        $bright = mysqli_fetch_array($result3);
        return $bright;
    }
    
}

?>