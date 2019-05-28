
<?php

//zien of er een url(page) gestuurd is naar de controller

            

    $room = $_GET["room"];
    $connection = new mysqli("35.195.134.226", "mi40", "root", "mi40db", 3306);
            $query1 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 1 ORDER BY NowTimeDate asc ");
            $query2 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 2 ORDER BY NowTimeDate asc");
            $query3 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 3 ORDER BY NowTimeDate asc");
            $query4 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 4 ORDER BY NowTimeDate asc");
            $query5 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 5 ORDER BY NowTimeDate asc");
            $query6 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 6 ORDER BY NowTimeDate asc");
            $query7 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 7 ORDER BY NowTimeDate asc ");
            $query8 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 8 ORDER BY NowTimeDate asc ");
            $query9 = $connection->query("SELECT *  FROM sensor s,modulesroom m WHERE s.sensor_id = 9 ORDER BY NowTimeDate asc ");
            $result1 = $query1->fetch_assoc();
            $result2 = $query2->fetch_assoc();
            $result3 = $query3->fetch_assoc();
            $result4 = $query4->fetch_assoc();
            $result5 = $query5->fetch_assoc();
            $result6 = $query6->fetch_assoc();
            $result7 = $query7->fetch_assoc();
            $result8 = $query8->fetch_assoc();
            $result9 = $query9->fetch_assoc();
    $output = include_once "view/text.php";
    return $output;


?>