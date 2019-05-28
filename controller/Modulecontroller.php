
<?php

//zien of er een url(page) gestuurd is naar de controller

    $room = $_GET["room"];
    $module = $_GET["module"];
    if($module == 1){
        $output = include_once "view/text1.php";
    }
    else if($module == 2){
        $output = include_once "view/text2.php";
    }
    else if($module == 3){
        $output = include_once "view/text3.php";
    }
    return $output;


?>