<?php

require_once('../config/loader.php');

if(isset($_POST['signin'])){
    try{
            // parameters
        $key = $_POST['key'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM users WHERE (username= :key OR mobile= :key OR email= :key) AND ( password= :password) LIMIT 1";

        //stmt
        $stmt =  $conn->prepare($query);

        //bind: 
        $stmt-> bindValue(':key' , $key, PDO::PARAM_STR);
        $stmt->bindValue(':password' , $password, PDO::PARAM_STR);

        //excecute
        $stmt->execute();

        $hasUSer = $stmt->rowCount();

        if($hasUSer){
            header("location:../index.php?log=1");
        }else{
            header("location:../index.php?notUser=1");
        }
        
    }catch(PDOException $e){
        echo "error : ". $e->getMessage();
    }

}