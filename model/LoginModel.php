<?php

class LoginClass{
    
    private $db;
    //database connectie meegeven in de constructor
    public function __construct($con){
        $this->db = $con;
    }
    //kijk of de naam of password zitten dat zal je een 1 geven 
    public function CheckLogin($usr,$pwd){
        $sql = "select count(*) as amount from user where user_name ='$usr' and user_password='$pwd'";
    //uitvoeren sql
    $statement=$this->db->prepare($sql);
    $statement->execute();
    $row = $statement->fetchObject();
    
    if($row->amount>0){
        return true;   
    }
    else{
         return false;
    } 
   
    }
}


?>