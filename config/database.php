<?php

$serverName="localhost";
$username= "root";
$password= "";
$dbName= "loginandsignin";

try{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected Successfully";
}catch(PDOException $e){
    echo "connection faild : ". $e->getMessage();
}