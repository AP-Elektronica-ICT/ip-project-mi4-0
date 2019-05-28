<?php

$output = "";

session_start();
//zodat je geen blanco pagina krijgt als je opnieuw op de monitorpagecontroller bent door dat je niet weer hebt ingelogd.
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $output = include_once "view/monitorpageview.php";
    return $output;
} else {
    echo "Please log in first to see this page.";
}


//when the button is pressed
if(isset($_POST["submituser"])){
    //code debugging: put the code on display

    //name and password of the form putting it into a variable
    $name = $_POST["naam"];
    $password = $_POST["pass"];
    
    //include class and function with password and username
    include_once 'model/LoginModel.php';
    $LoginModel = new LoginClass($db);
    $Check = $LoginModel->CheckLogin($name,$password);
    
    if($Check)
    { 
        
        
        $output = include_once "view/monitorpageview.php";
        $_SESSION['loggedin'] = true;
        
    }
    else
    {
         $output = include_once "view/mislukt.php";
    }
    
    
    
}






return $output;

?>