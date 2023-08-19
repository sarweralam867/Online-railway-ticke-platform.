<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="bkash.css">
</head>
<body>
    <div class="header">
        <img src="bangladesh-railway.png" alt="asdas">
        <h1 class="BDRailway">Bangladesh Railway</h1>
    </div>
    <div class="Npayment">
        <div class="bkash_image">
            <img src="nagad.png" class="paymentpic" alt="">
        </div>
        <form action="payment_entry.php" method="post">
            <p style = "position:absolute; right:152px; top: 97px">Enter Your Nagad Number</p>
            <div class="input"style = "position:absolute; right:133px; top: 120px">
            <input type="text" name="number" placeholder="01XXXXXXXXX">
            </div>
        
            <p class="pin" style = "position:absolute; right:230px; top: 168px">PIN</p>
            <div class="input" style = "position:absolute; right:133px; top: 190px">
            <input type="password" name="password" placeholder="Enter Pin">
            </div>
            <form action="seat_booking.php" method="post" id="payment">
                <div style = "position:absolute; right:188px; top: 245px">
                    <input type="submit" class="btn tbn-primary" value="Submit" name="">  
                </div>  
            </form>   
        </form>
        <!-- <button id="btn">Submit</button> -->
    </div>
    
</body>
</html>
<?php
session_start();
require_once("Bangladesh_Railway.php");
if (isset($_POST['number']) && isset($_POST['password'])){
	$a= $_POST['number'];
	$b= $_POST['password'];
	$sql="INSERT INTO payment VALUES('$a','100','$b',$_SESSION[nid]')";
	$result= mysqli_query($conn,$sql);
	//check if empty
	if (mysqli_affected_rows($conn)){
		echo "Registered successfuccly.";
	}
	else{
		echo "Insertion failed.";
		
	}
}
?>