<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
$paginaData = new stdClass();

//navigation 
$paginaData ->content = "";

//database info
$dbInfo="mysql:host=35.195.134.226;dbname=mi40db";
$dbUser ="mi40";
$dbPassword ="root";
//connectie maken met de database
try{
    $db = new PDO($dbInfo,$dbUser,$dbPassword);
}
catch (Exception $e){
    print_r($dbInfo);
    print_r("...");
    print_r($dbUser);
    print_r("...");
    print_r($dbPassword);
    
}

//zien of er een url(page) gestuurd is naar de start.php
if(isset($_GET["page"]) ){
   
    $filetoLoad = $_GET["page"];
    $paginaData->content .=  include_once "controller/$filetoLoad.php";
}
//de Login controller die de pagina gaat tonen  
else{
    $paginaData->content .=  include_once "controller/loginpagecontroller.php";
} 

//pagina tonen
$pagina = include_once "pagina.php";

echo $pagina;

?>