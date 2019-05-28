<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $output = include_once "view/grnd1R1Mo2pageview.php";
    return $output;
} else {
    echo "Please log in first to see this page.";
}

?>