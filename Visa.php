<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Visa.css">
</head>
<body>
    <div class="header">
        <img src="bangladesh-railway.png" alt="asdas">
        <h1 class="BDRailway">Bangladesh Railway</h1>
    </div>
    <form action="payment_entry.php" method="post">
    <div class="parent">
        <img src="Visa.png" class="mastercard" alt="">
        <div class="child">
            <p>Card Number</p>
            <div class="input">
                <input type="text" name="number" placeholder="Enter number">
            </div>
            <p class="pin">Name</p>
            <div class="input">
                <input type="text" name="name" placeholder="Enter Name">
            </div>
            <form action="seat_booking.php" method="post" id="payment">
            <button id="btn">Proceed</button>
        </div>
        </form>
    </div>
        
    
</body>
</html>