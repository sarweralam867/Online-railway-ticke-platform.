<?php
session_start();
$_SESSION['journey_date']=$_POST['date_of_journey'];
$_SESSION['class']=$_POST['choose_class'];

require_once("Bangladesh_Railway.php");
if(isset($_POST['Station_From']) && isset($_POST['Station_To'])){
    $u= $_POST['Station_From'];
    $p= $_POST['Station_To'];
    $_SESSION['from']=$u;
    $_SESSION['to']=$p;
    $sql="SELECT Train_ID FROM route WHERE Station_From= '$u' AND Station_To= '$p'";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)!=0){
        $row= mysqli_fetch_assoc($result);?>
        
        <!DOCTYPE html>
        <html>
            <head>
                <link rel="stylesheet"
                  href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
                <link rel="stylesheet" href="style.css">
                <style>
                body {
                    font-family: 'Roboto', sans-serif;
                    font-size: 15px;
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    background-color: #cfd9d68f;
                    background-image: url('https://www.bproperty.com/blog/wp-content/uploads/bangladesh-3565219_1920.jpg');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-position: fixed;
                    background-size:1137px 800px;
                }
                
                </style>
            </head>
            <body>
