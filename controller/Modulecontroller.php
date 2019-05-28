
<?php

//zien of er een url(page) gestuurd is naar de controller

    $room = $_GET["room"];
    $module = $_GET["module"];
    if($module == 1){
        $output = include_once "view/module1view.php";
    }
    else if($module == 2){
        $output = include_once "view/module2view.php";
    }
    else if($module == 3){
        $output = include_once "view/module3view.php";
    }
    return $output;


?>