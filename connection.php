<?php
$server='localhost';
$username='root';
$password='';
$database='payment';
$con=new mysqli($server,$username,$password,$database);
if ($con->connect_error){
    die("Connection Failed: " . $con->connect_error);
    }
else{
    mysqli_select_db($con,$database);
    echo " ";
    }

?>