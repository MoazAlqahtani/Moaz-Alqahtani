<?php

$servername = "localhost";
$username = "moaz";
$password = "";
$database = "c9";
$table = "news";

$conn = new mysqli($servername,$username,$password,$database);

//check the connection 
if($conn->connect_error){
    //Exit and kill this process 
    die("Connection failed: "/$conn->connect_error);
}

?>
