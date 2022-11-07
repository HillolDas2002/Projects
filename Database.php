<?php 
$host="localhost";//127.0.0.1
$username="root";
$password="";
$database="decodetronics";

$con=new mysqli($host,$username,$password,$database);
if($con->connect_error){
    die("ERROR:".$con->connect_error);
}

?>