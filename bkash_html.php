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
    <div class= "Bpayment">
        <div class="bkash_image">
            <img src="bkashpayment.png" class="paymentpic" alt="">
        </div>
        <form action="payment_entry.php" method="post">
            <p style = "position:absolute; right:152px; top: 97px">Enter Your bKash Number</p>
            <div class="input"style = "position:absolute; right:133px; top: 120px">
            <input type="text" name="number" id="number" placeholder="01XXXXXXXXX">
            </div>
        
            <p class="pin" style = "position:absolute; right:230px; top: 168px">PIN</p>
            <div class="input" style = "position:absolute; right:133px; top: 190px">
            <input type="password" name="password" id="password" placeholder="Enter Pin">
            </div>
            <div style = "position:absolute; right:188px; top: 245px">
                <input type="submit" class="btn tbn-primary" value="Submit" name="">  
            </div>  
        </form> 
    </div>
        


    </div>
    
</body>
</html>

<!-- height="95px" width="300" 
<input type="submit" name="" placeholder="Submit" class="btn"> -->