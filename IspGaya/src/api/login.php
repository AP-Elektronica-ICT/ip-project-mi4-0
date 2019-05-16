<?php

define('DB_HOST','35.195.134.226' );
define('DB_USER','mi40' );
define('DB_PASS', 'root');
define('DB_NAME', 'mi40DB');

function connect(){

    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connecterrno($connect)){
        die("failed to connect:" .mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");

    return $connect
}
$con = connect();
    $username=$_POST['username'];
    $password=$_POST['password'];
$query="SELECT * from users where username='$username' and password='$password'";
$result=mysqli_query($con,$query)
if(mysqli_num_rows($result)==1){
session_start();
$_SESSION['auth']='true';
header('location:index.php');
}
else {echo 'wrong username or password';}

?>