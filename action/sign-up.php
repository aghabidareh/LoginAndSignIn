<?php

require_once('../config/loader.php');

if(isset($_POST['signup'])){
    try{
            // parameters
        $username = $_POST['username'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

        $query = "INSERT INTO users set username=? , password=? , mobile=? , email=?";

        //stmt
        $stmt =  $conn->prepare($query);

        //bind: 
        $stmt-> bindValue(1 , $username, PDO::PARAM_STR);
        $stmt->bindValue(2 , $password, PDO::PARAM_STR);
        $stmt->bindValue(3 , $mobile, PDO::PARAM_STR);
        $stmt->bindValue(4 , $email, PDO::PARAM_STR);

        //excecute
        $stmt->execute();

        // echo "account created!";
        header("location:../index.php");
    }catch(PDOException $e){
        echo "error : ". $e->getMessage();
    }

}