<?php
$servername = "localhost";
$username = "db23_085";
$password = "db23_085";
$dbname = "db23_080";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("connection failed: ".$conn->connect_error);
}
?>