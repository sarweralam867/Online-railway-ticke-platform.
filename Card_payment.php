<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Cardpayment.css">
</head>
<body>
    <div class="header">
        <img src="bangladesh-railway.png" alt="asdas">
        <h1 class="BDRailway">Bangladesh Railway</h1>
    </div>
    <form action="payment_entry.php" method="post">
        <div class="parent">
            <img src="download (1).png" class="mastercard" alt="">
            <div class="child">
                <p>Card number</p>
                <div class="input">
                    <input type="text" name="number" placeholder="Enter number">
                </div>
                
                <p class="pin">Name</p>
                <div class="input">
                    <input type="text" name="" placeholder="Enter Name">
                </div>
                
                <button id="btn">Proceed</button>
            </div>
        </div>
    </form>
    
</body>
</html>